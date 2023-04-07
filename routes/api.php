<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
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
        
            return response()->json([
                'path' => $path,
                'data' => [
                    'name' => $name,
                    'email' => $email,
                    'phone' => $phone,
                    'filename' => $filename,
                ]
             
            ]);
        }

        return response()->json([
            'error' => 'Invalid file'
        ]);
});


