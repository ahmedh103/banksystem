
@extends('layouts.master')

@section('content')

<div  class="container col-md-6  p-5">
<div class="card">
    <div class="card-body">


        @if (Session::has('success'))
                    
        <div class="alert alert-success" role="alert">
            {{Session::get('success')}}
          </div>
          
        @endif
<form  method="POST" action='{{route('store.viewTransfer')}}'>
    @csrf
    
      
    
    <div class="form-group">
      <label for="exampleInputEmail1 mt-2">From:-</label>
      <select class="form-control mt-2" name="sender_name" id="">
        @foreach ($customers as $customer)
<option  value="{{$customer->name}}" >{{$customer->name}}</option>
@endforeach
      </select>
      @error('sender_name')
      <small id="emailHelp" class="form-text text-muted">{{$message}}</small>
    @enderror
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1 mt-2">Transfer to:-</label>
      <select name="reciver_name" id=""  class="form-control  mt-2">
        @foreach ($customers as $customer)
        <option value="{{$customer->name}}">{{$customer->name}}</option>
        @endforeach
              </select>
              @error('reciver_name')
              <small id="emailHelp" class="form-text text-muted">{{$message}}</small>
            @enderror
    </div>

  
  
    <div class="form-group">
      <label for="exampleInputPassword1">Amount</label>
      <input type="text" class="form-control" name="amount" id="exampleInputPassword1">
      @error('amount')
      <small id="emailHelp" class="form-text text-muted">{{$message}}</small>
    @enderror
    </div>
    
    <button type="submit" class="btn btn-primary mt-2">Process to pay</button>
    <a  class="btn btn-danger mt-2"  href="/" >Back</a>
  </form>


</div>
    </div>
</div>

@endsection








