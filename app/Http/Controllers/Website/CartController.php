<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class CartController extends Controller
{
    public function cart(Request $request){

        //$cart = $request->session()->get('cart');
       // dd($cart);

       /* echo '<pre>';
        print_r($cart);
        die();*/
       /* $data['product'] = DB::table('product_tb')
            ->select('*')
            ->where('product_tb.id',$cart)
            //->join('category_tb','category_tb.id','=','product_tb.p_category')
            //->orderby('product_tb.p_category','ASC')
            ->get();
        echo '<pre>';
        print_r($data);
        die();*/
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
    public function addCart(Request $request, $id)
    {
        //$request->session()->flush();
       // print_r($request->session()->all());

        $cart = $request->session()->get('cart');
        //echo '<pre>';
        //print_r($cart);
        //die();

        if(!$cart){
            $cart=[
                $id=>[
                    'quantity' => 1
                ]
            ];
            $request->session()->put('cart', $cart);
            $value = $request->session()->all();
            echo "<pre>";
            echo "No Id";
            print_r($value);
            return true;
        }


        if(isset($cart[$id])){
            $cart[$id]['quantity']++;
            $request->session()->put('cart', $cart);
            $value = $request->session()->all();
            echo "<pre>";
            echo "same id";
            print_r($value);
            return true;
        }
        /*echo '<pre>';
        print_r($cart);*/
       // die();

        $cart[$id]=[
            'quantity' => 1
        ];
        $request->session()->put('cart', $cart);
        $value = $request->session()->all();
        echo "<pre>";
        echo "new id";
        print_r($value);
        return true;
        /*echo '<pre>';
        print_r($cart);*/

        //dd($cart);
       /* echo '<pre>';
        print_r($cart);*/
        //die();

    }

    /*public function continueShopping()
    {
        return redirect()->back();
    }*/
}
