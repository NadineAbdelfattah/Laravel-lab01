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
  <div class="container">
    <div class="mt-5">
  <div class="card">
    <div class="card-header">
     Post details
    </div>
    <div class="card-body">
      <h5 class="card-title">{{$post['title']}}</h5>
      <p class="card-text">{{$post['description']}}</p>
    </div>
    <div class="card-body">
      <h5 class="card-title"><b>Title :- </b>{{$post['title']}}</h5>
      <p class="card-text"><b>Description :-</b><br>{{$post['description']}}</p>
    </div>
  </div>

    </div>
  </div>
  @endsection
  <!-- JavaScript Bundle with Popper -->



