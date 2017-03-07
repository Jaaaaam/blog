@extends('layouts.main')

@section('content')
  <form class="form-horizontal" method="POST" action="/blog/{{ $blog->id }}">
  {{ method_field('PATCH') }}
  {{ csrf_field() }}
    <h2>Add New Post <span class="pull-right"><button type="submit" class="btn">Publish Post</button></span></h2>
    <br><br>
    <div class="form-group">
      <label class="col-sm-2" for="title">Title:</label>
      <div class="col-sm-10">
        <input class="form-control" name="title" value="{{ $blog->title }}">
      </div>
      <br><br><br>
      <label class="col-sm-2" for="category">Category:</label>
      <div class="col-sm-10">
        <input class="form-control" name="category" value="{{ $blog->category }}">
      </div>
      <br><br><br>
      <label class="col-sm-2" for="slug">Slug:</label>
      <div class="col-sm-10">
        <input class="form-control" name="slug" value="{{ $blog->slug }}"v>
      </div>
      <br><br><br>
      <label class="col-sm-2" for="body">Body:</label>
      <div class="col-sm-10">
        <textarea class="form-control" name="body" placeholder="Enter Body" rows=20 > {{ $blog->body }} </textarea>
      </div>
    </div>
  </form>
  


@stop