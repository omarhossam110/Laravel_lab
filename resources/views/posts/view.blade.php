@extends('layouts.app')

@section('title') Index @endsection
@section('content')
<div class="text-center">
  <a href="{{route('posts.create')}}" class="mt-4 btn btn-success">Create Post</a>
</div>
<table class="table mt-4">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Posted By</th>
      <th scope="col">Created At</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
      <tr>
        <td>{{$post['id']}}</th>
        <td>{{$post->title}}</td>
        @if($post->user)
          <td>{{$post->user->name}}</td>
        @else
          <td>Not Defined</td>
        @endif
        {{-- <td>{{$post->user ? $post->user->name : 'Not Defined'}}</td>
        <td>{{$post->user?->name}}</td> --}}
        <td>{{$post->created_at}}</td>
        <td>
            <a href="#" class="btn btn-primary">Edit</a>
            <a href="#" class="btn btn-danger">Delete</a>
        </td>
      </tr>
  </tbody>
</table>
@endsection
