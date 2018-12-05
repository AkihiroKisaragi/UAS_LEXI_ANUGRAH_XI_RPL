@extends('layouts.app')
@section('content')

<div class="holder">
    
        <div>
            <form action="{{url('/add/inventory')}}">
                <h1 style="float:left">Manage Inventories</h1>
                <button style="float:right" class="btn btn-primary">Add Inventory</button>
            </form>
        </div>
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th>id</th>
                    <th>Address</th>
                    <th>Capacity</th>
                    <th>Action</th>
                </tr>
            </thead>
            @foreach ($data as $item)
            <tbody>
                <tr>
                        <th>{{$item->id}}</th>    
                        <td>{{$item->alamat}}</td>    
                        <td>{{$item->kapasitas}}</td>
                        <td>
                            <div>
                            <form style="display:inline-block" action="{{url('delete/inventory/'.$item->id)}}">
                                        <button class="btn btn-danger pull-right">Delete</button>
                                    </form>
                                <form style="display:inline-block" action="{{url('edit/inventory/'.$item->id)}}">
                                        <button class="btn btn-primary pull-right">Edit</button>
                                    </form>
                            </div>
                        </td>
                </tr>
            </tbody>
            @endforeach
        </table>
</div>
@endsection