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
    <div class="col-xs-6 col-sm-6 col-md-6 mt-3 mb-1">
      <select class="form-select" name="author_id" aria-label="Author">
        <option selected>Author</option>
        @foreach ($auth_list as $author_label)
        <option value="{{$author_label->id}}">{{$author_label->lastname.", ".$author_label->firstname}}</option>
        @endforeach
      </select>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6  mt-3 mb-1">
      <select class="form-select" name="coauthor_id" aria-label="Co-Author">
        <option selected>Co-Author</option>
        @foreach ($coauth_list as $coauthor_label)
        <option value="{{$coauthor_label->id}}">{{$coauthor_label->lastname.", ".$coauthor_label->firstname}}</option>
        @endforeach
      </select>
    </div>
    <div class="col-xs-3 col-sm-3 col-md-3">
      <div class "form-group">
        <strong>Date read:</strong>
        <input type="date" name="date_read" class="form-control" placeholder="2022-01-01">
      </div>
    </div>
    <div class="col-xs-2 col-sm-2 col-md-2">
      <div class "form-group">
        <strong>Rating (1=Great 10=Didn't finish)</strong>
        <input type="number" name="rating" class="form-control" placeholder="Rating" step="1" min="0" max="10">
      </div>
    </div>
    <div class="col-xs-2 col-sm-2 col-md-2">
      <div class "form-group">
        <strong>Published:</strong>
        <input type="number" name="published" class="form-control" placeholder="1970">
      </div>
    </div>

    <div class="row mt-3 mb-1">
      <div class="col-xs-6 col-sm-3 col-md-3">
        <select class="form-select" name="genre_id" aria-label="Genre select">
          <option selected>Choose Genre</option>
          @foreach ($genres_list as $genre_label)
          <option value="{{$genre_label->id}}">{{$genre_label->genre}}</option>
          @endforeach
        </select>
      </div>

      <div class="col-xs-6 col-sm-3 col-md-3">
        <select class="form-select" name="owned_id" aria-label="Genre select">
          <option selected>Book owned?</option>
          @foreach ($owned_list as $owned_label)
          <option value="{{$owned_label->id}}">{{$owned_label->owned_status}}</option>
          @endforeach
        </select>
      </div>
    </div>

    <div class="col-xs-4 col-sm-4 col-md-4 mt-3">
      <select class="form-select" name="series_id" aria-label="Series select">
        <option selected>Series</option>
        @foreach ($series_list as $series_label)
        <option value="{{$series_label->id}}">{{$series_label->series}}</option>
        @endforeach
      </select>
    </div>
    <div class="col-xs-4 col-sm-4 col-md-4 mt-3">
      <div class "form-group">

        <input type="numeric" name="isbn" class="form-control" placeholder="ISBN #">
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="row mb-1 mt-3"">
        <div class="form-floating">
          <textarea class="form-control" placeholder="Description" id="get_comments" name="comments" style="height: 100px"></textarea>
          <label for="get_comments">Book Description</label>
        </div>
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center py-3">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>

@endsection