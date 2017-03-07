@extends('layouts.main')

@section('content')

    @foreach($blogs as $blog)
      <div class="posts">
        <h2><a href="/blog/{{ $blog->slug }}">{{ $blog->title }}</a></h2>
        <i><p>In category <a href="">{{ $blog->category }}</a> posted on {{ date('F d, Y', strtotime($blog->published_at)) }}</p></i>

        <div class="post-body">
          <p class="truncate">{{ $blog->body }}</p>
        </div>
      </div>
    @endforeach
  
@stop

