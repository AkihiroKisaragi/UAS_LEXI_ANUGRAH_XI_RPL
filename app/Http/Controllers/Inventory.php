<?php

namespace App\Http\Controllers;
use App\gudang;

use Illuminate\Http\Request;

class Inventory extends Controller
{
    public function index(){
        $data = \App\gudang::all();
        return view('pages.inventory')->with('data',$data);
    }

    public function add(){
        return view('pages.add.inventory');
    }

    public function confirm(Request $req){
        $model = new \App\gudang;
        $model->alamat = $req->input('address');
        $model->kapasitas = $req->input('capacity');
        $model->save();
        return redirect(url('manage/inventory'));
    }

    public function remove($id){
        $model = \App\gudang::where('id',$id)->delete();
    }

    public function edit($id){
        $data = \App\gudang::where('id',$id)->get();
        return view('pages.edit.inventory')->with('data',$data);
    }

    public function confirmedit(Request $req){
        $id = $req->input('id');
        $data = \App\gudang::where('id',$id)->first();
        $data->alamat = $req->input('address');
        $data->kapasitas = $req->input('capacity');
        $data->updated_at = now();
        $data->save();
        return redirect(url('/manage/inventory'));
    }
}
