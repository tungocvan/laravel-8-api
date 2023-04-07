<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
     //
     public function __construct()
     {
         $this->middleware('auth');
     }
     public function index(Request $request){
          //return view('User::user');        
         $uri = 'user.list';
         $data = ['status' => 'Danh Sách Thành Viên'];
         return view('admin.layout',['action' => $uri, 'data' => $data]);  
     }
     public function add(Request $request){
        //return view('User::user');        
       $uri = 'user.add';
       $data = ['status' => 'Thêm Mới Thành Viên'];
       return view('admin.layout',['action' => $uri, 'data' => $data]);  
     }
    public function roles(Request $request){
            //return view('User::user');        
        $uri = 'user.roles';
        $data = ['status' => 'Phân Quyền Thành Viên'];
        return view('admin.layout',['action' => $uri, 'data' => $data]);  
    }

}
