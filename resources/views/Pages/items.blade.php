@extends('layouts.app')
@section('content')
<div class="holder">
        <form action="{{url('add/items')}}">
            <h1 style="float:left">Manage Items</h1>
            <button style="float:right" class="btn float-right shadow btn-primary">Add Items</button>
        </form>
        <br><br>
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th>id</th>
                    <th>Item Name</th>
                    <th>Weight</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->nama}}</td>
                        <td>{{$item->berat}}</td>
                        <td> <div class="container">
                            <form style="display:inline-block" action="{{url('edit/items/'.$item->id)}}">
                            <button class="btn btn-primary">Edit</button>
                            </form>
                            <form style="display:inline-block" action="{{url('delete/items/'.$item->id)}}">
                                <button class="btn btn-danger">Delete</button> 
                            </form>
                        </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
</div>
@endsection