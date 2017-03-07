@extends('layouts.main')

@section('content')
  <h2>{{ $blog->title }} <span class="pull-right"><a href="/blog/{{ $blog->id}}/edit" class="btn">Edit</a><a href="/blog/{{ $blog->id}}/delete" class="btn">Delete</a> </span></h2>
  <p> <a href=""> {{ $blog->category }} </a> <i>{{ date('F d Y', strtotime($blog->published_at)) }}</i> </p>
  <br>
  <p> {!! nl2br(e($blog->body)) !!} </p>
  <hr>
  <div class="comments"> 
    <form method="POST" action="/{{ $blog->id }}/comment">
    {{ csrf_field() }}
    <h2>Comments <span class="pull-right"> <button type="submit" class="btn">Leave Comment</button></span></h2>
    <br> 
    
      <textarea class="form-control" name="body" rows=5></textarea>
    </form>
    <br>  
    @foreach($blog->comment as $comment)
      <p><strong> Anonymous said : </strong></p>
      <p>{{ $comment->body }}</p>
    @endforeach
  </div>
@stop