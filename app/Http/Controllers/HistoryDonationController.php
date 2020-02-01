<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Donation;
use App\HistoryDonation;
use Veritrans_Config;
use Veritrans_Snap;
use Veritrans_Notification;

class HistoryDonationController extends Controller
{
    public function __construct(Request $request)
    {
        $this->request = $request;
 
        // Set midtrans configuration
        Veritrans_Config::$serverKey = config('services.midtrans.serverKey');
        Veritrans_Config::$isProduction = config('services.midtrans.isProduction');
        Veritrans_Config::$isSanitized = config('services.midtrans.isSanitized');
        Veritrans_Config::$is3ds = config('services.midtrans.is3ds');
    }

    public function notificationHandler(Request $request)
    {
        $notif = new Veritrans_Notification();
        \DB::transaction(function() use($notif) {

          // post from midtrans response
          $transaction = $notif->transaction_status;
          $type = $notif->payment_type;
          $donationId = $notif->order_id;
          $fraud = $notif->fraud_status;
          $donation = Donation::find($donationId);
          
 
          if ($transaction == 'capture') {
 
            // For credit card transaction, we need to check whether transaction is challenge by FDS or not
            if ($type == 'credit_card') {
 
              if($fraud == 'challenge') {
                // TODO create payment history for any detail regading donations
                $historyDonation = HistoryDonation::create([
                    'donation_id' => $donationId,
                    'status_message' => "Transaction donation_id: " . $donationId ." is challenged by FDS",
                    'gross_amount' => $donation->amount,
                    'payment_type' => $type,
                    'transaction_status' => $transaction
                ]);
                // TODO set payment status in merchant's database to 'Challenge by FDS'
                $donation->setPending();
                
              } else {
                
                // TODO create payment history for any detail regarding donations
                $historyDonation = HistoryDonation::create([
                    'donation_id' => $donationId,
                    'status_message' => "Transaction donation_id: " . $donationId ." successfully captured using " . $type,
                    'gross_amount' => $donation->amount,
                    'payment_type' => $type,
                    'transaction_status' => $transaction
                ]);
                // TODO set payment status in merchant's database to 'Success'
                $donation->setSuccess();
              }
 
            }
 
          } elseif ($transaction == 'settlement') {
 
            // TODO set payment status in merchant's database to 'Settlement'
            $historyDonation = HistoryDonation::create([
                'donation_id' => $donationId,
                'status_message' => "Transaction donation_id: " . $donationId ." successfully transfered using " . $type,
                'gross_amount' => $donation->amount,
                'payment_type' => $type,
                'transaction_status' => $transaction
            ]);
            $donation->setSuccess();
 
          } elseif($transaction == 'pending'){
 
            // TODO set payment status in merchant's database to 'Pending'
            $historyDonation = HistoryDonation::create([
                'donation_id' => $donationId,
                'status_message' => "Waiting customer to finish transaction donation_id: " . $donationId ." using " . $type,
                'gross_amount' => $donation->amount,
                'payment_type' => $type,
                'transaction_status' => $transaction
            ]);
            $donation->setPending();
 
          } elseif ($transaction == 'deny') {
 
            // TODO set payment status in merchant's database to 'Failed'
            $historyDonation = HistoryDonation::create([
                'donation_id' => $donationId,
                'status_message' => "Payment using " . $type . " for transaction donation_id: " . $donationId . " is Failed.",
                'gross_amount' => $donation->amount,
                'payment_type' => $type,
                'transaction_status' => $transaction
            ]);
            $donation->setFailed();
 
          } elseif ($transaction == 'expire') {
 
            // TODO set payment status in merchant's database to 'expire'
            $historyDonation = HistoryDonation::create([
                'donation_id' => $donationId,
                'status_message' => "Payment using " . $type . " for transaction donation_id: " . $donationId . " is expired.",
                'gross_amount' => $donation->amount,
                'payment_type' => $type,
                'transaction_status' => $transaction
            ]);
            $donation->setExpired();
 
          } elseif ($transaction == 'cancel') {
 
            // TODO set payment status in merchant's database to 'Failed'
            $historyDonation = HistoryDonation::create([
                'donation_id' => $donationId,
                'status_message' => "Payment using " . $type . " for transaction donation_id: " . $donationId . " is canceled.",
                'gross_amount' => $donation->amount,
                'payment_type' => $type,
                'transaction_status' => $transaction
            ]);
            $donation->setFailed();
 
          }
 
        });
 
        return;
    }
}
