<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShopController extends Controller
{
    //
    public function index(){
        $data['category'] = DB::table('category_tb')
            ->select('c_name','id','status')
            ->where('category',0)
            ->where('status',1)
            ->get();

        $data['contact'] = DB::table('contact_tb')
            ->select('phone','email','address')
            ->first();
        /* echo '<pre>';
         print_r($data);
         die();*/
        return view('website/shopGrid',$data);
        //return view('Website/shopGrid');
    }
    public function details(){
        $data['category'] = DB::table('category_tb')
            ->select('c_name','id','status')
            ->where('category',0)
            ->where('status',1)
            ->get();

        $data['contact'] = DB::table('contact_tb')
            ->select('phone','email','address')
            ->first();
        return view('Website/shopDetails',$data);
    }
    public function cart(){
        $data['category'] = DB::table('category_tb')
            ->select('c_name','id','status')
            ->where('category',0)
            ->where('status',1)
            ->get();

        $data['contact'] = DB::table('contact_tb')
            ->select('phone','email','address')
            ->first();
        return view('Website/shoppingCart',$data);
    }
}
