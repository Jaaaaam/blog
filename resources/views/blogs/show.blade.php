@extends('layouts.main')

@section('content')
  <h2>{{ $blog->title }} <span class="pull-right"><a href="/blog/{{ $blog->id}}/edit" class="btn">Edit</a><a href="/blog/{{ $blog->id}}/delete" class="btn">Delete</a> </span></h2>
  <p> <a href=""> {{ $blog->category }} </a> <i>{{ date('F d Y', strtotime($blog->published_at)) }}</i> </p>
  <br>
  <p> {!! nl2br(e($blog->body)) !!} </p>

@stop