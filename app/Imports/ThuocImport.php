<?php
// https://docs.laravel-excel.com/3.1/getting-started/installation.html
namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use App\Models\Product;

class ThuocImport implements ToCollection
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function collection(Collection $rows)
        {
            dd('oki');
        }
}