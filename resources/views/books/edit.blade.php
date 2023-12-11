@extends('layouts.master')
@section('title','Bills Books Home')

@section('content')

<div class="container">
  {{-- 1st row: Title and back button --}}
  <div class="row">
    <div class="col-lg-1">
    </div>
    <div class="col-lg-5">
      <div class="pull-left">
        <h2>Edit a book</h2>
        
      </div>
      <div class="pull-right">
        <a class="btn btn-primary" href="{{session('book_url')}}"> Back</a>
      </div>
    </div>
    <div class="col-lg-6">

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

    <!-- 2nd row -->
    <div class="row">

      <!-- row2, col 1 spacer -->
      <div class="col-lg-2">
      </div>

      <!-- row 2, col 2 book info -->
      <div class="col-lg-5">

        <div class="row mb-1">
          <label for="get_title" class="col-auto col-form-label"><strong>Title:</strong></label>
          <div class="col-sm-4 col-med-6 col-lg-8">
            <div class="form-group">
              <input class="form-control" type="text" name="title" value="{{ $book->title }}" id="get_title"
                placeholder="Title">
            </div>
          </div>
        </div>

        <div class="row mb-1">
          <label for="get_author" class="col-auto col-form-label"><strong>Author:</strong></label>
          <div class="col-sm-7">
            <select class="form-select" name="author_id" id="get_author" aria-label="Author">
              <option selected>Author</option>
              @foreach ($auth_list as $author_label)
              <option @if ($author_label->id == $book->author_id)
                selected="selected"
                @endif
                value="{{$author_label->id}}">{{$author_label->lastname.", ".$author_label->firstname}}</option>
              @endforeach
            </select>
          </div>
        </div>

        <div class="row mb-1">
          <label for="get_coauth" class="col-auto col-form-label"><strong>Co-Author:</strong></label>
          <div class="col-sm-7">
            <select class="form-select" name="coauthor_id" id="get_coauth" aria-label="Co-Author">
              <option selected>Co-Author</option>
              @foreach ($coauth_list as $coauthor_label)
              <option @if ($coauthor_label->id == $book->coauthor_id)
                selected="selected"
                @endif
                value="{{$coauthor_label->id}}">{{$coauthor_label->lastname.", ".$coauthor_label->firstname}}</option>
              @endforeach
            </select>
          </div>
        </div>

        <div class="row mb-1">
          <label for="get_pub_date" class="col-auto col-form-label"><strong>Published:</strong></label>
          <div class="col-sm-2">
            <input class="form-control" type="integer" name="published" value="{{ $book->published }}"
              id="get_pub_date">
          </div>
          <label for=" get_pub_genre" class="col-auto col-form-label"><strong>Genre:</strong></label>
          <div class="col-sm-6">
            <select class="form-select" name="genre_id" for="get_pub_date" aria-label="Genre select">
              <option selected>Genre</option>
              @foreach ($genres_list as $genre_label)
              <option @if ($genre_label->id == $book->genre_id)
                selected="selected"
                @endif
                value="{{$genre_label->id}}">{{$genre_label->genre}}</option>
              @endforeach
            </select>
          </div>
        </div>

        <div class="row mb-1">
          <label for="get_series" class="col-auto col-form-label"><strong>Series:</strong></label>
          <div class="col-sm-6">
            <select class="form-select" name="series_id" for="get_series" aria-label="Series">
              <option selected>Series</option>
              @foreach ($series_list as $series_label)
              <option @if ($series_label->id == $book->series_id)
                selected="selected"
                @endif
                value="{{$series_label->id}}">{{$series_label->series}}</option>
              @endforeach
            </select>
          </div>
        </div>

        <div class="row mb-1">
          <label for="get_isbn" class="col-auto col-form-label"><strong>ISBN:</strong></label>
          <div class="col-sm-4">
            <div class "form-group"><input type="number" name="isbn" value="{{ $book->isbn }}" id=get_isbn"
                class="form-control" placeholder="ISBN #">
            </div>
          </div>
          <label for="get_dtread" class="col-auto col-form-label"><strong>Date read:</strong></label>
          <div class="col-sm-4">
            <div class "form-group">
              <input type="date" name="date_read" value="{{ $book->date_read }}" id="get_dtread" class="form-control"
                placeholder="2022-01-01">
            </div>
          </div>
        </div>
        <div class="row mb-1">
          <label for="get_rating" class="col-auto col-form-label"><strong>Rating:</strong></label>
          <div class="col-sm-2">
            <div class "form-group">
              <input type="integer" name="rating" value="{{ $book->rating }}" id="get_rating" class="form-control"
                placeholder="Rating">
            </div>
          </div>
          <label for="get_owned" class="col-auto col-form-label"><strong>Owned:</strong></label>
          <div class="col-sm-4">
            <select class="form-select" name="owned_id" id="get_owned" aria-label="Genre select">
              <option selected>Book owned?</option>
              @foreach ($owned_list as $owned_label)
              <option @if ($owned_label->id == $book->owned_id)
                selected="selected"
                @endif
                value="{{$owned_label->id}}">{{$owned_label->owned_status}}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="row mb-1">
          <div class="form-floating">
            <textarea class="form-control" placeholder="Description" id="get_comments" name="comments"
              style="height: 100px">{{ $book->comments }}</textarea>
            <label for="get_comments">Book Description</label>
          </div>
        </div>

        {{-- End row 2 col2 --}}
      </div>

      <!-- Row 2, col 3 Book cover image -->
      <div class="col-lg-5">
        <img src={{ $bkurl }} class="img-fluid h-50" alt="Cover">
      </div>

      {{-- End row 2 --}}
    </div> 


    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </form>
</div>


@endsection