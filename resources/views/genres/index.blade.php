@extends('layouts.master')
@section('title','Bills Books Genres')
@section('content')

<div class="container">
<div class="row">
   <div class="col-med-5 col-lg-10">
      <div class="pull-left">
        <h2>Show genres</h2>
      </div>
    </div>
      <div class="col-med-1 col-lg-2">
        <div class="pull-right">
        <a class="btn btn-success" href="{{route('Genres.create')}}"> Create new Genre</a>
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
    <th>Genre</th>
    <th>Book count</th>
    <th width="280px">Action</th>
 </tr>

</table>

</div>
@endsection
