@extends('layouts.main')

@section('container')
    <h1 class="mb-5">Post Categories</h1>

    @foreach ($category as $cat)
      <ul>
        <li>
          <h2><a href="/categories/{{ $cat->slug }}">{{ $cat->name }}</a></h2>
        </li>
      </ul>
    @endforeach
@endsection