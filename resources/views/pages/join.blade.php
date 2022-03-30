@extends('books.layout')

@section('content')

<div class="row">
   <div class="col-lg-12">
      <div class="pull-left">
        <h2>Show books</h2>
      </div>
      <div class="pull-right">
        <a class="btn btn-success" href="{{ route('books.create') }}"> Create new Bok</a>
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
    <th>ID</th> 
    <th>Title</th>
    <th>Date Read</th>
    <th>Genre ID</th>
    <th>Genre Name</th>
    <th width="280px">Action</th>
 </tr>
  @foreach ($books as $book)
  <tr>
    <td>{{ $book->id }}</td>
    <td>{{ $book->title }}</td>
    <td>{{ $book->date_read }}</td>
    <td>{{ $book->genre_id }}</td>
    <td>{{ $book->genres.name }}</td>
   <td>
      <form action="{{ route('books.destroy',$book->id) }}" method="POST">
      <a class="btn btn-info" href="{{ route('books.show', $book->id) }}">Show</a>
      <a class="btn btn-primary" href="{{ route('books.edit', $book->id) }}">Edit</a>
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
