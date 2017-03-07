@extends('layouts.main')

@section('content')
  <h2>{{ $blog->title }}</h2>
  <p> <a href=""> {{ $blog->category }} </a> <i>{{ date('F d Y', strtotime($blog->published_at)) }}</i> </p>
  <br>
  <p> {{ $blog->body }} </p>

@stop