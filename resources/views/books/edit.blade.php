@extends('layouts.master')
@section('title','Bills Books Home')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-lg-2">
    </div>
    <div class="col-lg-5 margin-tb">
      <div class="pull-left">
        <h2>Edit a book</h2>
      </div>
      <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('Books.index') }}"> Back</a>
      </div>
    </div>
  </div>

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

  <form method="POST" action="{{ route('Books.update', $book->id) }}">
    @csrf
    @method('PUT')

    <!-- 1 row -->
    <div class="row">
      <!-- col 1 -->
      <div class="col-lg-2">
      </div>
      <div class="col-lg-5">
        <div class="row">
          <div class "form-group">
            <strong>Book name:</strong>
            <input type="text" name="title" value="{{ $book->title }}" class="form-control" placeholder="Title">
          </div>
        </div>
        <div class="row">
          <div class "form-group">
            <strong>ISBN:</strong>
            <input type="number" name="isbn" value="{{ $book->isbn }}" class="form-control" placeholder="ISBN #">
          </div>
        </div>
        <div class="row">
          <div class "form-group">
            <strong>Date read:</strong>
            <input type="date" name="date_read" value="{{ $book->date_read }}" class="form-control" placeholder="2022-01-01">
          </div>
        </div>
        <div class="row">
          <div class "form-group">
            <strong>Comments:</strong>
            <input type="text" name="comments" value="{{ $book->comments }}" class="form-control" placeholder="Short description">
            <!--  <textarea class="form-control" placeholder="Summarize book" id="floatingTextarea2" style="height: 100px">{{ $book->comments }}</textarea> -->
          </div>
        </div>
      </div>
        <!-- Book cover image -->
      <div class="col-lg-5">
             <img src={{ $bkurl }} class="img-fluid h-50" alt="Cover">
 
      </div>

    <div class="row mt-2">
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
  </form>
</div>


@endsection