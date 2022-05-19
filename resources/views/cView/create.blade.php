
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
<form  method="POST" action='{{route('store.view')}}'>
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Name:-</label>
      <input type="text" class="form-control" name="name" id="exampleInputEmail1" >
      @error('name')
      <small id="emailHelp" class="form-text text-muted">{{$message}}</small>
    @enderror
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Email:-</label>
      <input type="email" class="form-control" name="email" id="exampleInputEmail1" >
      @error('email')
      <small id="emailHelp" class="form-text text-muted">{{$message}}</small>
    @enderror
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Balance</label>
      <input type="text" class="form-control" name="balance" id="exampleInputPassword1">
      @error('balance')
      <small id="emailHelp" class="form-text text-muted">{{$message}}</small>
    @enderror
    </div>
    
    <button type="submit" class="btn btn-primary mt-2">Create</button>
    <a  class="btn btn-danger mt-2"  href="/" >Back</a>
  </form>


</div>
    </div>
</div>

@endsection








