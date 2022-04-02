@extends('layouts.master')
@section('title','Bills Books Home')
@section('content')

<div class="row">
   <div class="col-lg-12">
      <div class="pull-left">
        <h2>Show books</h2>
      </div>
      <div class="pull-right">
        <a class="btn btn-success" href="{{route('Books.create')}}"> Create new Book</a>
      </div>
   </div>
</div>

@if ($message = Session::get('success'))
  <div class="alert alert-success">
  <p>{{ $message }}</p>
  </div>
@endif

<table class ="table table-bordered" >
  <tr>
    <th>Title</th>
    <th>Author</th>
    <th>Genre</th>
    <th>Date Read</th>
    <th width="280px">Action</th>
 </tr>
 @foreach ($books as $book)
  <tr>
    <td>{{$book->title }}</td>
    <td>{{$book->author->lastname . ", " . $book->author->firstname }}</td>
    <td>{{$book->genre->genre}}</td>
    <td>{{$book->date_read }}</td>
    <td>
      <form action="{{ route('Books.destroy',$book->id) }}" method="POST">
      <a class="btn btn-info" href="{{ route('Books.show', $book->id) }}">Show</a>
      <a class="btn btn-primary" href="{{ route('Books.edit', $book->id) }}">Edit</a>
      @csrf
      @method('delete')
      <button type="submit" class="btn btn-danger">Delete</button>
      </form>
     </td>
   </tr>
   @endforeach


</table>

{{ $books->links() }}
@endsection
