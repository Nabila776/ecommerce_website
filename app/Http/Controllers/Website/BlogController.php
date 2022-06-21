<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function index(){
        $data['category'] = DB::table('category_tb')
            ->select('c_name','id','status')
            ->where('category',0)
            ->where('status',1)
            ->get();
        return view('Website/blog',$data);
    }
    public function details(){
        $data['category'] = DB::table('category_tb')
            ->select('c_name','id','status')
            ->where('category',0)
            ->where('status',1)
            ->get();
        return view('Website/blogDetails',$data);
    }
}
