<?php
// https://github.com/corcel/corcel#installing-corcel
namespace App\Http\Controllers;
use Corcel\Model\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request){           
        $uri = 'post.list';
        $data = ['status' => 'Danh Sách Bài Viết'];
        //$posts = Post::all();
        //$post = Post::find(2280);
        //$posts = Post::status('publish')->get();
          $posts = Post::type('post')->status('publish')->get();
        //dd($post);
        
        // foreach ($posts as $post) {
        //     echo $post->title;
        // }
        return view('admin.layout',['action' => $uri, 'data' => $data,'posts' => $posts]);  
    }
    public function add(Request $request){       
      $uri = 'post.add';
      $data = ['status' => 'Thêm Mới Bài Viết'];
      return view('admin.layout',['action' => $uri, 'data' => $data]);  
    }
   public function category(Request $request){           
       $uri = 'post.category';
       $data = ['status' => 'Chuyên Mục Bài Viết'];
       return view('admin.layout',['action' => $uri, 'data' => $data]);  
   }
}
