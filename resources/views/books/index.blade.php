@extends('layouts.master')
@section('title','Bills Books Home')
@section('content')

<div class="container">
<div class="row">
   <div class="col-med-5 col-lg-10">
      <div class="pull-left">
        <h2>Show books</h2>
      </div>
    </div>
      <div class="col-med-1 col-lg-2">
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

<table class ="table table-bordered border-dark table-striped" >
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
    <td>{{$book->Author->lastname . ", " . $book->Author->firstname }}</td>
    <td>{{$book->Genre->genre}}</td>
    <td>{{$book->date_read }}</td>
    <td>
      <form action="{{ route('Books.destroy',$book->id) }}" method="POST">
      <a class="btn btn-info btn-sm" href="{{ route('Books.show', $book->id) }}">Show</a>
      <a class="btn btn-primary btn-sm" href="{{ route('Books.edit', $book->id) }}">Edit</a>
      @csrf
      @method('delete')
      <button type="submit" class="btn btn-danger btn-sm">Delete</button>
      </form>
     </td>
   </tr>
   @endforeach


</table>

{{ $books->links() }}
</div>
@endsection
