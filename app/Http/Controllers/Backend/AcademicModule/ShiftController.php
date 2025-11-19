<?php

namespace App\Http\Controllers\Backend\AcademicModule;

use App\Helper\ResponseHelper;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShiftController extends Controller
{
    public function index(){
        return  ResponseHelper::Out('success',"hello shift",200);
    }
}
