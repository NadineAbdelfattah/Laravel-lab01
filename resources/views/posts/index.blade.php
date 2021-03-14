{{-- Hello {{$name}}



@if ($name == 'Nadine')
<h1>Hi nido!</h1>
@else
    <h1>Sorry</h1>
@endif --}}

{{-- @foreach ($posts as $post)
    {{$post['id']}}
@endforeach --}}

@extends('layouts.app')

@section('content')
  
  <a href="#" class="btn btn-success">Create Post</a>

  <table class="table mt-5">
    <thead>
      <tr>
        {{-- <th scope="col">#</th> --}}
        <th scope="col">Title</th>
        <th scope="col">Posted by</th>
        <th scope="col">Created at</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($posts as $post)
      <tr>
        <th scope="row">{{$post['id']}}</th>
        <td>{{$post['title']}}</td>
        <td>{{$post['posted_by']}}</td>
        <td>{{$post['created_at']}}</td>
        <td class="col">
            <a href="{{route('posts.show',['post'=>$post['id']])}}" class="btn btn-info">View</a>
            <a href="#" class="btn btn-primary">Edit</a>
            <a href="#" class="btn btn-danger">Delete</a>
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
  @endsection
  <!-- JavaScript Bundle with Popper -->


