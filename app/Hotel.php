<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $table = 'hotels';
    protected $fillable = [
        'name',
        'address',
        'city',
        'country',
        'state',
        'phone_number',
        'email',
        'zip_code',
        'image'
    ];
}
