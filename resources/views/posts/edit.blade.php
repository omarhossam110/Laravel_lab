@extends('layouts.app')

@section('title') create @endsection
@section('content')

<form method="POST" action="{{route('posts.update',  $post['id'])}}">
    @csrf

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Title</label>
        <input name="title" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$post['title']}}">
    </div>
  
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Description</label>
        <input name="description" class="form-control" value="{{$post['description']}}">
    </div>


    <button type="submit" class="btn btn-primary">Submit</button>

</form>

@endsection