@extends('layouts.master')
@section('title','Bills Books Home')

@section('content')

<div class="container">
<div class="d-flex">
  <div class="col-lg-3">
  </div>
  <div class="col-lg-4 margin-tb">
      <div class="pull-left">
        <h2>Show a book</h2>
      </div>
  </div>
</div>
<div class="row mb-2">
  <div class="col-lg-3">
  </div>
  <div class="col-lg-4 col-med-4">
      <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('Books.index') }}"> Back</a>
      </div>
   </div>
   <div class="col-lg-5 col-med-2">
      <div class="pull-right">
        <a class="btn btn-secondary"  href="{{ route('Books.edit', $book->id) }}"> Edit</a>
      </div>
  </div>
</div>

<div class="row">
  <div class="col-lg-3">
  </div>
 <div class="col-lg-4">
       <div class="form-group">
        <strong>Title:</strong>
        {{ $book->title }}
      </div>
      <div class="form-group">
        <strong>Author:</strong>
        {{ $book->author->lastname . ", " . $book->author->firstname }}
      </div>
      <div class="form-group">
        <strong>Co-author:</strong>
        To be set
      </div>
      <div class="form-group">
        <strong>Publication Year:</strong>
        To be set
      </div>
       <div class="form-group">
        <strong>Genre:</strong>
        {{ $book->genre->genre }}
      </div>
       <div class="form-group">
        <strong>Series:</strong>
        To be set
      </div>
       <div class="form-group">
        <strong>Date read:</strong>
        {{ $book->date_read }}
      </div>
      <div class="form-group">
        <strong>Rating:</strong>
        To be set
      </div>
      <div class="form-group">
        <strong>Owned:</strong>
        To be set
      </div>
      <div class="form-group">
        <strong>Comments:</strong>
        {{ $book->comments }}
      </div>
   </div> 
  <div class="col-lg-5">
    <img src={{ $bkurl }} class="img-fluid h-50" alt="Cover"> 
  </div>
</div>
</div>
@endsection