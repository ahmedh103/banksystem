@extends('layouts.master')

@section('content')

<div class="container col-md-6">
<table class="table table-striped table-dark">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Sender Name</th>
        <th scope="col">Reciver Name</th>
        <th scope="col">Amount</th>
        <th scope="col">Date</th>
       
      </tr>
    </thead>
    @foreach ($transfers as $transfer )
        
    
    <tbody>
      <tr>
        <th scope="row">{{ $transfer ->id}}</th>
        <td>{{ $transfer ->sender_name}}</td>
        <td>{{ $transfer ->reciver_name}}</td>
        <td>{{ $transfer ->amount}}</td>
        <td>{{ $transfer ->date}}</td>
       
      </tr>
    
    </tbody>
    @endforeach
  </table>
</div>

  @endsection