@extends('layouts.master')
@section('title','Bills Books Authors')
@section('content')

<div class="container">
<div class="row">
   <div class="col-med-5 col-lg-10">
      <div class="pull-left">
        <h2>Show authors</h2>
      </div>
    </div>
      <div class="col-med-1 col-lg-2">
        <div class="pull-right">
        <a class="btn btn-success" href="{{route('Authors.create')}}"> Create new Author</a>
      </div>
   </div>
</div>

@if ($message = Session::get('success'))
  <div class="alert alert-success">
  <p>{{ $message }}</p>
  </div>
@endif

<table class ="table table-bordered border-dark table-striped" >
  <tr>
    <th>Author</th>
    <th>Book count</th>
    <th width="280px">Action</th>
 </tr>

</table>

</div>
@endsection
