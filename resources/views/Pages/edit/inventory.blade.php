@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <h1>Edit Inventory</h1>
        <form action="{{url('/done/edit/inventory')}}">
            @foreach ($data as $item)
            <input value="{{$item->id}}" type="hidden" name="id" class="form-control">
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Address</span>
                </div>
                <input value="{{$item->alamat}}" type="text" class="form-control" placeholder="Address" name="address">
            </div>
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Capacity</span>
                </div>
                <input value="{{$item->kapasitas}}" type="text" class="form-control" name="capacity" placeholder="Capacity">
                <button class="btn btn-primary" style="margin-left:20px">Confirm</button>
            </div>
            @endforeach
        </form>
    </div>
@endsection