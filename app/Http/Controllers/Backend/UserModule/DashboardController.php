<?php

namespace App\Http\Controllers\Backend\UserModule;

use App\Helper\ResponseHelper;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
   public function dashboard(){
    return  ResponseHelper::Out('success','welcome to superadmin dashboard',200);
   }
}
