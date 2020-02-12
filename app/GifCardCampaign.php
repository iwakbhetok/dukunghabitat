<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class GifCardCampaign extends Model
{
    protected $fillable = [
        'id',
        'sender',
        'receiver',
        'message',
        'uuid'
    ];
}
