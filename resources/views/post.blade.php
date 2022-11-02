@extends('layouts.main')

@section('container')
<article>
  <h2>{{ $post->title }}</h2>
  <p>By. Rahman R9 in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
  {{ $post->body }}
</article>
    
<a href="/posts">Back  to Posts</a>
@endsection