<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    protected $fillable = [
        'id',
        'donation_id',
        'sender',
        'receiver',
        'message',
        'uuid'
    ];
 
}
