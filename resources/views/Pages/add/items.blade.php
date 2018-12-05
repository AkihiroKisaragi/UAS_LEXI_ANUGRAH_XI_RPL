@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Add Items</h1>
        <br><br>
        <div class="row">
            <form action="{{url('/done/items')}}" style="width:90vh">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" placeholder="Item Name" name="nama">
                </div>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Inventory Address</span>
                    </div>
                    <select class="custom-select" name="id">
                        @foreach ($data as $item)
                    <option value="{{$item->id}}">{{$item->alamat}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="input-group mb-2">
                    <input type="text" class="form-control" name="berat" placeholder="Weight">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Kg</span>
                    </div>
                    <button class="btn btn-primary" style="margin-left:20px">Confirm</button>
                </div>
            </form>
        </div>
    </div>
@endsection 