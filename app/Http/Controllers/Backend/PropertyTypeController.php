<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\PropertyType;
use Illuminate\Http\Request;

class PropertyTypeController extends Controller
{
    public function index(){
        $types = PropertyType::latest()->get();
        return view('backend.property.types',compact('types'));
    }
    public function add(){
        return view('backend.property.add');
    }
    public function store(Request $req){
        $req->validate([
            'type_name'=>'required|unique:property_types|max:100',
            'type_icon'=>'max:100',
        ]);

        PropertyType::insert([
            'type_name'=>$req->type_name,
            'type_icon'=>$req->type_icon,
        ]);
        return redirect()->route('property.types');
    }

    public function edit($id){
        $types = PropertyType::findOrFail($id);
        return view('backend.property.edit',compact('types'));
    }

    public function update(Request $req){
        $pid = $req->id;

        PropertyType::findOrFail($pid)->update([
            'type_name'=>$req->type_name,
            'type_icon'=>$req->type_icon,
        ]);
        return redirect()->route('property.types');
    }
    public function destroy($id){
        $types = PropertyType::findOrFail($id)->delete();
        return redirect()->route('property.types');
    }
}
