@extends('layouts.master')
@section('title','Bills Books Authors')
@section('content')

<div>
  <livewire:l-w-authors>
</div>

@endsection

@section('script')
<script>
    window.addEventListener('close-modal', event => {

        $('#addAuthorModal').modal('hide');
        $('#editAuthorModal').modal('hide');
        $('#deleteAuthorModal').modal('hide');
    })
</script>
@endsection