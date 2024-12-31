<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class confession extends Model
{
    //
    protected $table='confessions';
    protected $fillable=[
        'thecon',
        'confession'
    ];
}
