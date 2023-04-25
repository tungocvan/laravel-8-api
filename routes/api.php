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


Route::get('/download/{file}', function ($file) {    
    $filePath = 'public/uploads/'.$file;
    $headers = [
        'Content-Type' => 'text/plain',
    ];
    return response()->download(Storage::path($filePath), $file, $headers);
    
});

Route::post('/upload', function (Request $request) {

     if ($request->hasFile('file') && $request->file('file')->isValid()) {
            $phone = $request->phone;
            $email = $request->email;
            $name = $request->name;
            $date = $request->date;
            $file = $request->file('file');
            $filename =$phone.'-'.$date.'-'.$file->getClientOriginalName() ;            
            $path = $file->storeAs('public/uploads', $filename);
            
            // $path = Storage::putFile('public', $filename);
            // $url = Storage::url($path);
        
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
                'title' => 'Nguyễn Thị Định thông báo',
                'body' => "Chúng tôi đã nhận được hồ sơ của Phụ huynh: $name - số điện thoại: $phone ",
                'attach' => env('URL_ATTACH') . $filename                
            ];
        
         
            $ccEmail = env('CC_EMAIL', 'tungocvan@gmail.com');

            if($email){
                Mail::to($email)->cc($ccEmail)->send(new DemoEmail($details));
            }else{
                Mail::to($ccEmail)->send(new DemoEmail($details));
            }

            
        
            //return 'Email sent successfully!';
            // gui mail thanh cong thi tra ve
            return response()->json([
                'path' => $path ,
                'data' => $status
             
            ]);
        }

        return response()->json([
            'error' => 'Invalid file'
        ]);
});

Route::post('/update', function (Request $request) {
    $idHoso = Hoso::find($request->id);

    $date = $request->date;    
    $file = $request->file('file');
    if($file){
        $filename =$date.'-'.$file->getClientOriginalName() ;            
        $path = $file->storeAs('public/uploads', $filename);
        $idHoso->update([
            'status' => $request->status,
            'content' => $request->noidung,
            'filename' => $filename
        ]);
        $details = [
            'title' => 'Nguyễn Thị Định thông báo',
            'body' => "Chúng tôi đã xữ lý hồ sơ của Phụ huynh: $idHoso->name - Số điện thoại: $idHoso->email",
            'attach' => env('URL_ATTACH') . $idHoso->filename                
        ];
    }else{
        $idHoso->update([
            'status' => $request->status,
            'content' => $request->noidung
        ]);
        $details = [
            'title' => 'Nguyễn Thị Định thông báo',
            'body' => "Chúng tôi đã xữ lý hồ sơ của Phụ huynh: <b>$idHoso->name</b> - Số điện thoại: $idHoso->email \n Hồ sơ quý Phụ huynh đã bị từ chối với lý do: $request->noidung",     
            'attach' => null     
        ];
    }
    
    $email = $idHoso->email;

    $ccEmail = env('CC_EMAIL', 'tungocvan@gmail.com');

    if($email){
        Mail::to($email)->cc($ccEmail)->send(new DemoEmail($details));
    }else{
        Mail::to($ccEmail)->send(new DemoEmail($details));
    }

    return response()->json([
        'id' => $request->id,
        'status' => $request->status,
        'content' => $request->noidung
    ]);
});

Route::post('/delete', function (Request $request) {
    $idHoso = Hoso::find($request->id);
    $idHoso->delete();
    return response()->json([
        'id' => $request->id,

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

Route::get('/tracuu/hoso', function () {
    $itemHoso = Hoso::paginate($perPage = 50)->fragment('hoso');
    return response()->json([
        'hoso' => $itemHoso
    ]);
});