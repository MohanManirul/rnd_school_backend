<?php

namespace App\Http\Controllers\Backend;

use App\Helper\ResponseHelper;
use App\Http\Controllers\Controller;
use App\Models\Module;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    public function modules(){

        $module = Module::with('sub_module')->orderBy('sequence', 'asc')->get();
        return  ResponseHelper::Out('success',$module,200); 

    }
}
