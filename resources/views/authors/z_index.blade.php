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
      </div>
    </div>
  </div>

  @if ($message = Session::get('success'))
  <div class="alert alert-success">
    <p>{{ $message }}</p>
  </div>
  @endif

  <div class="row">
    <div class="col-med-3 col-lg-3">
      <form action="{{ route('Authors.index') }}" method="POST">
        <select class="form-select" size="20" id=auth_bk_sel name="auth_sel_id" aria-label="Author" onchange="choose_auth();">
          @foreach ($author_book_count as $author_label)
          <option @if ($author_label->id == $id)
            selected="selected"
            @endif
            value="{{$author_label->id}}">{{$author_label->lastname.", ".$author_label->firstname." (".$author_label->book_count.")"}}</option>
          @endforeach
        </select>
        @csrf
        <a class="btn btn-secondary mt-2" href="{{route('Authors.index', $auth_id)}}"> Display books</a>
        <a class="btn btn-success mt-2" href="{{route('Authors.create')}}"> Create new Author</a>
        <a class="btn btn-warning mt-2" href="{{route('Authors.edit', $author_label->id)}}"> Edit Author</a>
        <input type="text" id="auth_id" name="auth_id" class="form-control" placeholder="Author ID">
      </form>

    </div>
    <div class="col-med-9 col-lg-9">
      <table class="table table-bordered border-dark table-striped">
        <tr>
          <th>Title</th>
          <th>Published</th>
          <th>Cover</th>
        </tr>
        @foreach ($book_list as $book)
        <tr>
          <td>{{$book->title }}</td>
          <td>{{$book->published }}</td>
          <td>{{$book->isbn }}</td>
        </tr>
        @endforeach
      </table>
    </div>
  </div>
</div>

@endsection