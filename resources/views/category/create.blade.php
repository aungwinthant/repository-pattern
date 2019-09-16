@extends('layouts.app')

@section('content')

<form action="{{route('categories.store')}}"  method="POST" >
  @csrf
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection