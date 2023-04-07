<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use Automattic\WooCommerce\Client;
use Codexshaper\WooCommerce\Facades\Customer;
use Corcel\Model\Post;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/getProduct',function(Request $request){
   return 'Get Product: '.env('WOOCOMMERCE_STORE_URL');
});
Route::get('/getApi',function(){
    $response = Http::get('https://hmdpharma.vn/wp-json/custom-plugin/users');
    dd($response->object());
});

Route::get('/customers',function(){    
    $customers = Customer::all();    
    dd($customers);
    
});

Route::get('/getProduct',function(Request $request){
    $woocommerce = new Client(
        'https://hmdpharma.vn/',
        'ck_801850a97077833b9500b12372be4f37f47d35ee',
        'cs_6c56922e12b7eac750d3deb0b7f4c08ac816a185',
        [
            'version' => 'wc/v3',
        ],  
      ); 
    $data = [
        'tag_ID' => '41',
        'per_page' => '100',        
    ];  
    //$products =   $woocommerce->get('products/tags',$data);
    $products =   $woocommerce->get('products',['per_page' => '100', 'status' => 'publish']);
    dd($products);
});

Route::get('/posts',function(){    
    $allPost = Post::all();   
    dd($allPost);
    
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
