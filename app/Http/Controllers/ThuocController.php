<?php

namespace App\Http\Controllers;

use App\Models\Thuoc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;




class ThuocController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        
    }
    public function index(Request $request){           
        $uri = 'thuoc.list';
        $data = ['status' => 'Danh mục thuốc trúng thầu'];
        $per_page = 10;
        $page = isset($_GET['page']) ? intval($_GET['page']) : 1;       
        $productsAll = Thuoc::paginate(
            $perPage = $per_page ,
            $columns = ['*'] 
        )->fragment('products');   
        $total_pages = $productsAll->lastPage();                 
        //dd($productsAll->items());
        $myProduct = $productsAll->items();
        //$jsonString = json_encode($data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_HEX_QUOT | JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_NUMERIC_CHECK | JSON_FORCE_OBJECT | JSON_PRETTY_PRINT);
        // $myArray = ['apple', 'banana', 'orange'];
        // $mkey = Session::put('mKey', $myArray);
        //$page = isset($_GET['page']) ? intval($_GET['page']) : 1;                
        $products = $productsAll->items();
        return view('admin.layout',['action' => $uri, 'data' => $data, 'total_pages' => $total_pages,'page' => $page,'products' => $productsAll, 'myArray' => $data]); 
         
        
    }
}
