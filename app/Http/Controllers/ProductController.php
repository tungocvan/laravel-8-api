<?php
// https://woocommerce.github.io/woocommerce-rest-api-docs/
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\ProductsImport;
use App\Services\WooCommerceService;
use Maatwebsite\Excel\Facades\Excel;
use Automattic\WooCommerce\HttpClient\HttpClientException;
use App\Models\Thuoc;
class ProductController extends Controller
{
    //
    private $woocommerce;
    public function __construct()
    {
        $this->middleware('auth');
        $this->woocommerce = new WooCommerceService();        
    }
    public function index(Request $request){           
        $uri = 'product.list';
        $data = ['status' => 'Danh Sách Sản phẩm'];

        $products = Thuoc::where('nha_trung_thau','Công ty cổ phần GONSA')->where('nhom_thuoc','Nhóm 4')->get();
        dd($products);
        
        // Lấy tất cả sản phẩm
         //$products = $this->woocommerce->getProducts();
         //dd($products);
        //phân trang
        // $page = isset($_GET['page']) ? intval($_GET['page']) : 1;
        // $per_page = 3;
        // $products = $this->woocommerce->getProducts([
        //     'page' => $page,
        //     'per_page' => $per_page,
        // ]);
        // $total_products  = count($this->woocommerce->getProducts());
        // $total_pages = ceil($total_products / $per_page);      
        //dd($total_pages);
        // Lấy tất cả  sản phẩm theo danh mục
         //$products = $this->woocommerce->getProductsByCategorySlug("men");
         //dd($products);
         // lấy một sp thông qua ID
        // $product = $this->woocommerce->getProductByID(103);
        // lấy một sp thông qua slug
        // $product = $this->woocommerce->getProductBySlug('woocommerce-gimme-the-money-zipper-hoodie');
        // dd($product);

        //return view('admin.layout',['action' => $uri, 'data' => $data, 'total_pages' => $total_pages,'page' => $page,'products' => $products]);  
        return view('admin.layout',['action' => $uri, 'data' => $data]);  
    }
    public function add(Request $request){       
      $uri = 'product.add';
      $method = $request->method(); 
      //$items =[];
      $status='' ;
      if($method == "POST"){
        // $data = [
        //     'name' => 'Premium Quality 6',
        //     'type' => 'simple',
        //     'regular_price' => '100',
        //     'description' => 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.',
        //     'short_description' => 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.',
        //     'categories' => [
        //         [
        //             'id' => 17
        //         ],
        //         [
        //             'id' => 18
        //         ]
        //     ],
        //     'images' => [
        //         [
        //             'src' => 'http://demo.woothemes.com/woocommerce/wp-content/uploads/sites/56/2013/06/T_2_front.jpg'
        //         ],
        //         [
        //             'src' => 'http://demo.woothemes.com/woocommerce/wp-content/uploads/sites/56/2013/06/T_2_back.jpg'
        //         ]
        //     ]
        // ];
        // $products = ExceltoArray("/file.xlsx");
        // foreach ($products as $product_data) {
        //     //$product_data = Sanitize::clean($product_data); // Xử lý dữ liệu trước khi tạo sản phẩm
        //     try {
        //         $this->woocommerce->addProduct($product_data);
        //     } catch (HttpClientException $e) {
        //         echo $e->getMessage();
        //     }
        // }

      }else{        
        // $items = ExceltoArray("/file.xlsx");
        // dd($items);
        //$status = ExceltoArrayUpload("/danhmucthuoc.xlsx"); 
        
        // $chunkSize = 100; // kích thước của từng lô dữ liệu
        // collect($products)->chunk($chunkSize)->each(function($chunk) {
        //     // xử lý từng lô dữ liệu
        //     // ví dụ: chèn dữ liệu vào cơ sở dữ liệu
        //     Thuoc::insert($chunk->toArray());                         
        //     echo "đang cập nhật... ";
        //     //dd($chunk->toArray());
        // });
        
        //Thuoc::insert($products);
        
      }  

      $data = ['status' => 'Thêm Mới Sản phẩm '.$status];

      return view('admin.layout',['action' => $uri, 'data' => $data , 'status' => $status]);  
    }
    public function update(Request $request){     
      $uri = 'product.update';     
      $method = $request->method();  
      if($method == "PUT"){
            $data = [
                'name' => 'Divi Ninja Tee'
            ];            
            $status = $this->woocommerce->updateProductById(87,$data);
            $product = $this->woocommerce->getProductByID(87); 
      }else{
          $product = $this->woocommerce->getProductByID(87);  
      }
           
      $data = ['status' => "Cập nhật Sản phẩm - $method - Title:$product->name"];
      return view('admin.layout',['action' => $uri, 'data' => $data]);  
    }
   
    
   public function category(Request $request){           
       $uri = 'product.category';
       $data = ['status' => 'Chuyên Mục Sản phẩm'];
       return view('admin.layout',['action' => $uri, 'data' => $data]);  
   }
}
