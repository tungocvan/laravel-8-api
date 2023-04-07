<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request){
        $uri = str_replace('admin/','',$request->path());
        $data = ['status' => 'THÔNG TIN DMS BÁN HÀNG'];
        return view('admin.layout',['action' => $uri, 'data' => $data]);        
    }
    public function postList(Request $request){
        $uri = 'postList';
        $data = ['status' => 'BÀI VIẾT'];
        return view('admin.layout',['action' => $uri, 'data' => $data]);        
    }
    public function postAdd(Request $request){
        $uri = 'postAdd';
        $data = ['status' => 'THÊM BÀI VIẾT'];
        return view('admin.layout',['action' => $uri, 'data' => $data]);        
    }
    public function postCategory(Request $request){
        $uri = 'postCategory';
        $data = ['status' => 'THÊM CHUYÊN MỤC BÀI VIẾT'];
        return view('admin.layout',['action' => $uri, 'data' => $data]);        
    }
    

}
