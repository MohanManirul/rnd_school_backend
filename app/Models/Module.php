<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    public function sub_module()
    {
        return $this->hasMany(SubModule::class);
    }



    public function permission()
    {
        return $this->hasMany(Permission::class);
    }

}
