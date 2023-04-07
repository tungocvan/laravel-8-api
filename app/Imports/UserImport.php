<?php
// https://docs.laravel-excel.com/3.1/imports/import-formats.html
namespace App\Imports;

use App\Models\User;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class UsersImport implements ToCollection
{
     
    public function collection(Collection $rows)
    {
        dd($rows);
    }

}
