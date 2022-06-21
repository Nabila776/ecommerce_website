<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //
    public function index()
    {
        $data['banner'] = DB::table('banner_tb')
                ->select('*')
                ->first();


        $data['product'] = DB::table('product_tb')
            ->select('product_tb.*','category_tb.c_name as c_name')
            ->join('category_tb','category_tb.id','=','product_tb.p_category')
            ->get();

        $data['Latest_product'] = DB::table('product_tb')
            ->select('product_tb.*','category_tb.c_name')
            ->join('category_tb','category_tb.id','=','product_tb.p_category')
            ->orderby('product_tb.p_category','DESC')
            ->get();

        /*echo '<pre>';
         print_r($dataa);
         die();*/

        $data['Pcategory'] = DB::table('category_tb')
            ->select('c_name','id','image','status')
            ->where('category',0)
            ->where('status',1)
            ->get();
        $data['subcategory'] = DB::table('category_tb')
            ->select('c_name','id','status')
            ->where('category','!=',0)
            ->where('status',1)
            ->get();

        $data['contact'] = DB::table('contact_tb')
            ->select('phone','email','address')
            ->first();
        /*echo '<pre>';
        print_r($data);
        die();*/
        return view('website/home',$data);
    }
    public function privacyPolicy(){
        $data['privacy'] = DB::table('privacy_tb')
            ->select('*')
            ->first();

        return view('Website/privacypolicy',$data);
    }
    public function deliveryInformation(){

        return view('website/deliveryinfo');
    }
    public function addDelivery(Request $request){
        $validated = $request->validate([
            'user'              => 'required|max:255',
            'payment'           => 'required|max:150',
            'comment'           => 'required|max:500',
            'date'              => 'required',
            'amount'            => 'required|numeric',
            'fees'              => 'required|numeric'
        ]);



        $data = array(
            'u_name'     => $request->input('user'),
            'pay_method' =>  $request->input('payment'),
            'Comments'  => $request->input('comment'),
            'Date'      => $request->input('date'),
            'Amount'    => $request->input('amount'),
            'Fees'      => $request->input('fees')
        );
        $insert = DB::table('deliveryinfo_tb')->insert($data);
        if($insert){
            return redirect('deliverinfo')->with('status', 'Successfully Added');
        }else{
            return redirect('deliverinfo')->with('error', 'Something Went Wrong');
        }
        // $input = $request -> all();
        // echo '<pre>';
        // print_r($input);
        // die();

        // print_r(request->all());
        // die();
    }



}
