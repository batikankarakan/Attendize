<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GeoSnapShot extends Model
{
    public $fillable = [
        'eventName',
        'eventLink',
        'location',
        'country',
        'typeOfEvent',
        'password',
        'participant',
        'numberOfPhoto',
        'note',
        'name',
        'email',
        'phoneNumber',
        'facebookURL',
        'websiteURL',

        ];
}
