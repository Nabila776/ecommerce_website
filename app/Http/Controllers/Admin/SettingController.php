<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function smsSetting(){
        return view('Admin/smssetting');
    }

    public function appSetting(){

        return view('Admin/appsetting');
    }
    public function emailSetting(){
        return view('Admin/emailsetting');
    }
}
