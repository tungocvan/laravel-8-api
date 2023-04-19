<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use App\Models\Thuoc;
use App\Models\Hoso;
use App\Mail\DemoEmail;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/upload', function (Request $request) {

     if ($request->hasFile('file') && $request->file('file')->isValid()) {
            $phone = $request->phone;
            $email = $request->email;
            $name = $request->name;
            $date = $request->date;
            $file = $request->file('file');
            $filename =$phone.'-'.$date.'-'.$file->getClientOriginalName() ;            
            $path = $file->storeAs('uploads', $filename);
        
            // luu datase //
            $status = Hoso::create([
                'name' => $name,
                'email' => $email,
                'phone' => $phone,
                'filename' => $filename,
                'status' => 'pending',
                
            ]);
            // luu thanh cong roi gui mail
            $details = [
                'title' => 'Mail from Laravel 8',
                'body' => 'This is a demo email for testing purposes.'
            ];
        
            Mail::to('tungocvan@gmail.com')->send(new DemoEmail($details));
        
            //return 'Email sent successfully!';
            // gui mail thanh cong thi tra ve
            return response()->json([
                'path' => $path,
                'data' => $status
             
            ]);
        }

        return response()->json([
            'error' => 'Invalid file'
        ]);
});



Route::get('/tracuu/thuoc/trungthau', function (Request $request) {
    $columns = ['ten_thuoc','hoat_chat','ham_luong','dvt','so_luong','don_gia','thanh_tien','nha_trung_thau','ngay_qd_trung_thau','ten_bv_syt','nhom_thuoc'] ;
    // $productsAll = Thuoc::paginate(
    //     $perPage = 15 ,
    //     $columns = ['ten_thuoc','hoat_chat','ham_luong','dvt','so_luong','don_gia','thanh_tien','nha_trung_thau','ngay_qd_trung_thau','ten_bv_syt','nhom_thuoc'] 
    // )->fragment('products'); 
    // $products = $productsAll->items();     
    $field = 'hoat_chat';
    $content = 'Globulin';
    $products = Thuoc::select($columns)->where($field, 'like',"$content%")->paginate($perPage = 15)->fragment('products');
    return response()->json([
        'data' => $products
    ]);
});


// Route::post('/ntd/nophoso', function (Request $request) {
//     $phone = $request->phone;
//     return response()->json([
//         'status' => $request->phone
//     ]);
// });

Route::get('/tracuu/hoso/{phone}', function ($phone) {
    $itemHoso = Hoso::where('phone','like',"$phone%")->get();
    return response()->json([
        'phone' => $itemHoso
    ]);
});