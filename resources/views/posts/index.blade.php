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
  
  <a href="{{route('posts.create')}}" class="btn btn-success">Create Post</a>

  <table class="table mt-5">
    <thead>
      <tr>
        {{-- <th scope="col">#</th> --}}
        <th scope="col">ID</th>
        <th scope="col">Title</th>
        <th scope="col">Posted By</th>
        <th scope="col">Created At</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($posts as $post)
      {{-- //@dd($post->myUserRelation->name) --}}
      
      <tr>
        <th scope="row">{{$post->id}}</th>
        <td>{{$post->title}}</td>
        <td>{{$post->User ? $post->User->name: 'User not found'}}</td>
        <td>{{$post->created_at->diffForHumans()}}</td>
        <td class="col">
          <a href="{{ route('posts.show', [ 'post' => $post['id'] ]) }}" class="btn btn-info">View</a>
          <a href="{{route('posts.edit',['post' => $post['id'] ])}}" class="btn btn-primary">Edit</a>
          {{-- <a href="{{"delete/".$post['id']}}" class="btn btn-danger">Delete</a> --}}
          <form method="post" onsubmit="return confirm('Do you really want to delete?');" action="{{route('posts.destroy' , ['post'=>$post['id']])}}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            {{ method_field('DELETE') }}‏
            <input type="submit" value="Delete" class="btn btn-danger" style="float: right">
        </form>
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
  @endsection
  <!-- JavaScript Bundle with Popper -->


