<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\gudang;

class Items extends Controller
{
    public function index(){
        $data = \App\item::all();
        return view('pages.items')->with('data',$data);
    }

    public function add(){
        $data = \App\gudang::all(['id','alamat']);
        return view('pages.add.items')->with('data',$data);
    }
    
    public function confirm(Request $r){
        $item = new Item;
        $item->idgundang = $r->input('id');
        $item->nama = $r->input('nama');
        $item->berat= $r->input('berat');
        $item->created_at = now();
        $item->updated_at = now();
        $item->save();
        return redirect(url('manage/items'));
    }

    public function remove($id){
        $res=\App\item::where('id',$id)->delete();
        return redirect(url('manage/items'));
    }

    public function edit($id){
        $data = \App\item::where('id',$id)->get();
        return view('pages.edit.items')->with('data',$data);
    }

    public function confirmedit(Request $req){
        $id = $req->input('id');
        $item = \App\item::where('id',$req->input('id'))->first();
        $item->idgundang = $req->input('idgundang');
        $item->nama = $req->input('nama');
        $item->berat = $req->input('berat');
        $item->updated_at = now();
        $item->save();
        return redirect(url('manage/items'));
    }
}
