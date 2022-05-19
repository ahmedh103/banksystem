@extends('layouts.master')

@section('content')

<div class="container col-md-6">
<table class="table table-striped table-dark">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">name</th>
        <th scope="col">Email</th>
        <th scope="col">Balance</th>
        <th scope="col">Transfer</th>
      </tr>
    </thead>
    @foreach ($customers as $customer )
        
    
    <tbody>
      <tr>
        <th scope="row">{{$customer->id}}</th>
        <td>{{$customer->name}}</td>
        <td>{{$customer->email}}</td>
        <td>{{$customer->balance}}</td>
        <td><a class="btn btn-info" href="{{url('/transfer/index')}}">   Transfer</a>  </td>
      </tr>
    
    </tbody>
    @endforeach
  </table>
</div>

  @endsection