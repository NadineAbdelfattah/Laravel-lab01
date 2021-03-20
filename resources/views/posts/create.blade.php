  
@extends('layouts.app')

@section('content')

<div class="container">
  <div class="mt-5">
    <form method="POST" action="{{route('posts.store')}}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />

      <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" name="description"></textarea>
      </div>

      <div class="mb-3">
        <label for="post_creator" class="form-label">Post Creator</label>
       <select class="form-control" name="user_id">
         @foreach ($users as $user )
        <option value="{{$user->id}}">{{$user->name}}</option>
        @endforeach
       </select>
      </div>

      <button type="submit" class="btn btn-success">Create</button>
    </form>
  </div>

</div>
@endsection