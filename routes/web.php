<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SignInController;
use App\Http\Controllers\SignUpController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ThuocController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ForgotController;
use App\Http\Controllers\ExportUserController;
use App\Http\Controllers\ImportUserController;
use App\Http\Controllers\Auth\LoginController;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\Doctors\Auth\LoginCustomController;
use App\Http\Controllers\Doctors\Auth\ForgotPasswordController;
use App\Http\Controllers\Doctors\IndexController;
use App\Http\Controllers\Doctors\Auth\ResetPasswordDoctorsController;
use App\Http\Controllers\Auth\ResetPasswordController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Route cho trang Website
|
*/ 


Route::get('/home-phoenix', function () {          
    return view('phoenix',['content'=>'content']);
});



Route::get('/home-phoenix/{slug}', function ($slug,Request $request) {   
    //dd($request->name);
    $data = ['status' => 'THÔNG TIN DMS BÁN HÀNG'];
    return view('phoenix',['content'=>$slug,'data' => $data]);
});

Route::post('/home-phoenix/upload', function (Request $request) { 

    $file = $request->file('file');
        $filename = $file->getClientOriginalName();
        $path = $file->storeAs('uploads', $filename);

        return response()->json([
            'path' => $path
    ]);
});

Auth::routes();


Route::get('/', function () {            
    return view('home-page');
});


Route::get('/product-category', function () {
    return view('product-category');
});
Route::get('/product-detail', function () {
    return view('product-detail');
});

Route::get('/signin', [SignInController::class,'index'])->name('signin');
Route::get('/signup', [SignUpController::class,'index'])->name('signup');
Route::get('/forgot', [ForgotController::class,'index'])->name('forgot');
Route::get('/reset-password',[ResetPasswordController::class, 'showResetForm'])->name('reset-password');

Route::get('/logout',function(){
    Auth::guard('web')->logout();
    return redirect()->route('signin');
})->middleware('auth:web');


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Route cho trang Website đã đăng nhập
|
*/ 


Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/profile', [HomeController::class, 'profile'])->name('profile');

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Route cho trang Admin đã đăng nhập
|
*/ 




Route::prefix('/admin')->group(function(){        
    Route::get('/', [AdminController::class, 'index'])->name('admin');      

    Route::prefix('/users')->group(function(){
        Route::get('/', [UserController::class, 'index'])->name('users');    
        Route::get('/add', [UserController::class, 'add'])->name('users.add');    
        Route::get('/roles', [UserController::class, 'roles'])->name('users.roles');    
    });   

    Route::prefix('/post')->group(function(){
        Route::get('/list', [PostController::class, 'index'])->name('post.list');
        Route::get('/add', [PostController::class, 'add'])->name('post.add');
        Route::get('/category', [PostController::class, 'category'])->name('post.category');
    });

    Route::prefix('/product')->group(function(){
        Route::get('/list', [ProductController::class, 'index'])->name('product.list');
        Route::get('/add', [ProductController::class, 'add']);
        Route::post('/add', [ProductController::class, 'add'])->name('product.add');
        Route::get('/update', [ProductController::class, 'update']);
        Route::put('/update', [ProductController::class, 'update'])->name('product.update');
        Route::get('/category', [ProductController::class, 'category'])->name('product.category');
    });
    
    Route::prefix('/thuoc')->group(function(){
        Route::get('/list', [ThuocController::class, 'index'])->name('thuoc.list');
    });
});




 
Route::get('/auth/facebook', function () {
    return Socialite::driver('facebook')->redirect();
})->name('auth.facebook');

Route::get('/auth/facebook/callback',[LoginController::class, 'facebookCallback']);

Route::get('/auth/google', function () {
    return Socialite::driver('google')->redirect();
})->name('auth.google');

Route::get('/auth/google/callback',[LoginController::class, 'googleCallback']);


// Route::get('/export', [ExportUserController::class, 'export']);

// Route::get('/import', [ImportUserController::class, 'importBlade']);
// Route::post('/import', [ImportUserController::class, 'import'])->name('import');

// Route::prefix('/doctors')->name('doctors.')->group(function(){
//     Route::get('/',[IndexController::class, 'index'])->middleware('auth:doctor');
//     Route::get('/login',[LoginCustomController::class, 'login'])->middleware('guest:doctor')->name('login');
//     Route::post('/login',[LoginCustomController::class, 'postLogin'])->middleware('guest:doctor');

//     Route::post('/logout',function(){
//         Auth::guard('doctor')->logout();
//         return redirect()->route('doctors.login');
//     })->middleware('auth:doctor')->name('logout');

//     Route::get('/forgot-password',[ForgotPasswordController::class, 'getForgotPassword'])->middleware('guest:doctor')->name('forgot-password');
//     Route::post('/forgot-password',[ForgotPasswordController::class, 'sendResetLinkEmail'])->middleware('guest:doctor');
//     //Route::get('/reset-password',[ResetPasswordDoctorsController::class, 'showResetForm'])->name('reset-password');

// });

Route::get('/phpinfo', fn () => phpinfo());

