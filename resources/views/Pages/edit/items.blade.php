@extends('layouts.app')
@section('content')
    <form class="container-fluid" action="{{url('done/edit/items')}}">
        <h1>Edit Item</h1>
        @foreach ($data as $item)
        <input value="{{$item->id}}" type="hidden" name="id" class="form-control">
        <div class="input-group mb-2">
            <input value="{{$item->nama}}" type="text" class="form-control" placeholder="Item Name" name="nama">
        </div>
        <div class="input-group mb-2">
        <input value="{{$item->idgundang}}" type="text" class="form-control" name="idgundang" placeholder="Weight">
        </div>
        <div class="input-group mb-2">
        <input value="{{$item->berat}}" type="text" class="form-control" name="berat" placeholder="Weight">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Kg</span>
            </div>
            <button class="btn btn-primary" style="margin-left:20px">Confirm</button>
        </div>
        @endforeach
    </form>
@endsection