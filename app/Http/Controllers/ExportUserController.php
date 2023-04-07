<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UserExport;

class ExportUserController extends Controller
{
    public function export()
    {
        return Excel::download(new UserExport(), 'users.xlsx');
    }

}
