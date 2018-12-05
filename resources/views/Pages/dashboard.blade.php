@extends('layouts.app')
@section('content')
<div class="holder" >
<h1>Welcome, {{Auth::user()->name}}</h1>
<br>
<br>
  <div class="row">
      <div class="col">
          <table class="table">
              <thead class="thead-light">
                  <tr>
                    <th scope="col">id</th>
                    <th scope="col">Address</th>
                    <th scope="col">Capacity</th>
                    <th scope="col">Pictures</th>
                  </tr>
          </thead>
          @foreach ($data as $collection)
          <tbody>
                  <tr>
                    <th scope="row">{{$collection->id}}</th>
                    <td>{{$collection->alamat}}</td>
                    <td>{{$collection->kapasitas}}</td>
                    <td><img class="img-fluid" src="{{$collection->pic}}" alt=""></td>
                  </tr>
          </tbody>
          @endforeach
      </table>
      </div>
      <div class="col">
          <table class="table">
              <thead class="thead-light">
                  <tr>
                    <th scope="col">id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Weight</th>
                  </tr>
          </thead>
          @foreach ($data2 as $collection)
          <tbody>
                  <tr>
                    <th scope="row">{{$collection->id}}</th>
                    <td>{{$collection->nama}}</td>
                    <td>{{$collection->berat}}</td>
                  </tr>
          </tbody>
          @endforeach
      </table>
      </div>
    </div>
  </div>
@endsection
