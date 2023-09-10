<?php

namespace App\Imports;

use App\Models\Item;
use Maatwebsite\Excel\Concerns\ToModel;

class ItemImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Item([
            'name'=>$row['1'],
            'sku'=>$row['2'],
            'description'=>$row['3'],
            'price'=>$row['4'],
            'image'=>$row['5'],
        ]);
    }
}
