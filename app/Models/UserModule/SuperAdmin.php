<?php

namespace App\Models\UserModule;

use Illuminate\Database\Eloquent\Model;

class SuperAdmin extends Model
{
     protected $fillable = [
       
        'email',
        'password',

    ];
}
