<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class HistoryDonation extends Model
{
    protected $fillable = [
        'id',
        'donation_id',
        'status_message',
        'transaction_id',
        'gross_amount',
        'payment_type',
        'transaction_time',
        'transaction_status'
    ];
}
