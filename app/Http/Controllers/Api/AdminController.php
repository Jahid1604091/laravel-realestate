<?php

namespace App\Http\Controllers\Api;

use App\Exports\ItemExport;
use App\Http\Controllers\Controller;
use App\Imports\ItemImport;
use App\Imports\ProductImport;
use Illuminate\Http\Request;
use App\Jobs\ItemCSVUploadJob;
use Maatwebsite\Excel\Facades\Excel;

class AdminController extends Controller
{
    //upload csv
    public function uploadBulkCSV(){
       
        Excel::import(new ItemImport, request()->file('csv'));
        return "Done";
        // if($req->has('csv')){
        //     $csv = file($req->csv);
        //     $chunks = array_chunk($csv,10);
        //     $header = [];
      

        //     foreach($chunks as $key=>$chunk){
        //         $data = array_map('str_getcsv',$chunk);
        //         if($key == 0){
        //             $header = $data[0];
        //             unset($data[0]);
        //         }
        //         ItemCSVUploadJob::dispatch($data,$header);
        //     }
        // }
        
        // return "Please Uplaod CSV";
    }

    public function exportCSV(){
        return Excel::download(new ItemExport,'items.xlsx');
    }
}
