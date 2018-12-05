@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <form action="{{url('done/inventory')}}" style="width:90vh">
            <div class="input-group mb-2">
                <input type="text" class="form-control" placeholder="Address" name="address">
            </div>
            <div class="input-group mb-2">
                <input type="text" class="form-control" name="capacity" placeholder="Capacity">
                <button class="btn btn-primary" style="margin-left:20px">Confirm</button>
            </div>
        </form>
    </div>
@endsection