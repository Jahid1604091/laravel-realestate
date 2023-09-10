<?php

namespace App\Imports;

use App\Models\Models\Product;
use Maatwebsite\Excel\Concerns\ToModel;

class ProductImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Product([
            'name'=>$row['1'],
            'sku'=>$row['2'],
            'description'=>$row['3'],
            'price'=>$row['4'],
            'image'=>$row['5'],
        ]);
    }
}
