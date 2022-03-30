@extends('layouts.master')
@section('title','Bills Books Home')
@section('content')

<div class="row">
   <div class="col-lg-12 margin-tb">
      <div class="pull-left">
        <h2>Add new book</h2>
      </div>
      <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('Books.index') }}"> Back</a>
      </div>
   </div>
</div>
<!-- {{ route('Books.index') }} -->

@if ($errors->any())
  <div class="alert alert-danger">
    <strong>Trouble!</strong> There were problems with your input - please re-enter.<br><br>
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif


<form action="{{ route('Books.store') }}" method="POST">
  @csrf
  
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class "form-group">
        <strong>Book name:</strong>
        <input type="text" name="title" class="form-control" placeholder="Title">
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class "form-group">
        <strong>Date read:</strong>
        <input type="date" name="date_read" class="form-control" placeholder="2022-01-01">
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class "form-group">
        <strong>Comments:</strong>
        <input type="text" name="comments" class="form-control" placeholder="Book description">
      </div>
    </div>
     <div class="col-xs-12 col-sm-12 col-md-12 text-center">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
   </div>
 </form>
  
@endsection
   