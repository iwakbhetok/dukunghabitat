<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Donation;
use App\Slider;
use Veritrans_Config;
use Veritrans_Snap;
use Veritrans_Notification;
use Illuminate\Support\Str;
use App\Campaign;

class DonationController extends Controller
{
    protected $request;
 
    /**
     * Class constructor.
     *
     * @param \Illuminate\Http\Request $request User Request
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
 
        // Set midtrans configuration
        Veritrans_Config::$serverKey = config('services.midtrans.serverKey');
        Veritrans_Config::$isProduction = config('services.midtrans.isProduction');
        Veritrans_Config::$isSanitized = config('services.midtrans.isSanitized');
        Veritrans_Config::$is3ds = config('services.midtrans.is3ds');
    }
 
    /**
     * Show index page.
     *
     * @return \Illuminate\View\View
     */
    public function index($type)
    {
        $sliders = Slider::where('status', 'ENABLE')->get();
        
        foreach ($sliders as $slider) {
            $tempSlugItem = slugify($slider->title. ' '. $slider->sub_title);
            if($type == $tempSlugItem){
                $label = str_replace('-',' ',$type);
                return view('client.form-campaign', compact('label', 'type', 'slider'));
            }
        }
    //   $label = str_replace('-',' ',$type);
    //   return view('client.form-campaign', compact('label', 'type'));
    }

    public function types($type)
    {
        // find type slug based on  concat temp slug between title and sub title slider
        $sliders = Slider::where('status', 'ENABLE')->get();
        
        foreach ($sliders as $slider) {
            $tempSlugItem = slugify($slider->title. ' '. $slider->sub_title);
            if($type == $tempSlugItem){
                $label = str_replace('-',' ',$type);
                return view('client.donation-type.detail_donation_type', compact('label', 'type', 'slider'));
            }
        }
        return abort(404);
    }
 
    /**
     * Submit donation.
     *
     * @return array
     */
    public function submitDonation()
    {
        \DB::transaction(function(){
            $slider = Slider::find($this->request->slideId);
            // Save donasi ke database
            $donation = Donation::create([
                'donor_name' => $this->request->donor_name,
                'donor_email' => $this->request->donor_email,
                'donation_type' => $this->request->donation_type,
                'amount' => floatval($this->request->amount),
                'as_anonymous' => $this->request->as_anonymous,
            ]);
 
            // Buat transaksi ke midtrans kemudian save snap tokennya.
            $payload = [
                'transaction_details' => [
                    'order_id'      => $donation->id,
                    'gross_amount'  => $donation->amount,
                ],
                'customer_details' => [
                    'first_name'    => $donation->donor_name,
                    'email'         => $donation->donor_email,
                ],
                'item_details' => [
                    [
                        'id'       => $donation->donation_type,
                        'price'    => $donation->amount,
                        'quantity' => 1,
                        'name'     => ucwords(str_replace('-', ' ', $donation->donation_type))
                    ]
                ]
            ];
            $snapToken = Veritrans_Snap::getSnapToken($payload);
            $donate = Donation::find($donation->id);
            if(!empty($snapToken)){
              $donate->snap_token = $snapToken;
              $donate->save();
            }else{
              $donate->delete(); 
            }

            // check if data campaign is exist
            if($this->request->sender != ""){
                $message = ($this->request->messageText != "") ? $this->request->messageText : $slider->default_text_for_gif ;
                $uuid = Str::random();

                // save data gif campaign
                Campaign::create([
                    'donation_id'=> $donation->id,
                    'sender'    => $this->request->sender,
                    'receiver'  => $this->request->receiver,
                    'message'   => $message,
                    'uuid'      => $uuid,
                ]);
                
                $this->response['uuid'] = $uuid;
                $this->response['slider_id'] = $this->request->slideId;
                // $this->response['sender'] = $this->request->sender;
                // $this->response['receiver'] = $this->request->receiver;
                // $this->response['message'] = $message;
            }

            // Beri response snap token
            $this->response['snap_token'] = $snapToken;
        });
 
        return response()->json($this->response);
    }
 
}
