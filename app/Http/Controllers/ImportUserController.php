<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\UsersImport;
use App\Models\User;

class ImportUserController extends Controller
{
    
    // public function __construct(UserImport $userImport)
    //     {
    //         $this->userImport = $userImport;
            
    //     }
    
    //function này sẽ hiển thị blade view
    public function importBlade()
        {
            //echo storage_path() ."/danhmucthuoc.json";
            //return view('import');
            $students = json_decode(file_get_contents(storage_path() ."/danhmucthuoc.json"), true);
            //echo "<pre>";
            dd($students);
        }
    
    //function này sẽ thực thi import
    public function import(Request $request)
    {
        try {
            //$user = $this->userImport->import($request->file('file_user'));
            Excel::import(new UsersImport, storage_path() ."/file.xlsx");
            
                
        } catch (\Exception $e) {
            report($e);
        }
    }

}
