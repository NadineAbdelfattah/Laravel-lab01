@extends('layouts.app')


@section('content')
<div class="container">
    <div class="mt-5">
        <form method="post" action="{{route('posts.update' , ['post' => $post['id']])}}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            {{ method_field('PUT') }}
            <input type="hidden" name="id" value="{{$post['id']}}"/>‏
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{$post['title']}}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" class="form-control">{{$post['description']}}</textarea>
            </div>

            <div class="mb-3">
                <label for="post-creator" class="form-label">Post Creator</label>
                <select class="form-control" name="user_id">
                    <option value="{{$post->user->id}}">
                            {{$post->user->name}}
                    </option>
                </select>
            </div>

            <button type="submit" class="btn btn-success">Update</button>
        </form>
    </div>
</div>

@endsection