<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Donation;
use Veritrans_Config;
use Veritrans_Snap;
use Veritrans_Notification;

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
      switch ($type) {
        case 'membangun-rumah':
          $label = "Membangun Rumah";
          break;
        case 'membangun-air':
          $label = "Membangun Air Bersih";
          break;
        case 'membangun-sanitasi':
          $label = "Membangun Sanitasi";
          break;
        
        default:
          $label = "Membangun Rumah";
          break;
      }
      return view('client.form', compact('label', 'type'));
    }

    public function test(){
      $data['donations'] = Donation::orderBy('id', 'desc')->paginate(8);
      return view('welcome', $data);
    }

    public function types($type)
    {
      switch ($type) {
        case 'membangun-rumah':
          $label = "Rumah";
          break;
        case 'membangun-air':
          $label = "Air Bersih";
          break;
        case 'membangun-sanitasi':
          $label = "Sanitasi";
          break;
        
        default:
          $label = "Rumah";
          break;
      }
      return view('client.donation-type.detail_donation_type', compact('label', 'type'));
    }
 
    /**
     * Submit donation.
     *
     * @return array
     */
    public function submitDonation()
    {
        \DB::transaction(function(){
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
 
            // Beri response snap token
            $this->response['snap_token'] = $snapToken;
        });
 
        return response()->json($this->response);
    }
 
}
