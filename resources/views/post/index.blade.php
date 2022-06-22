@extends('layouts.main')
@section('content')
    <div>
        @foreach($posts as $post)
           <div>
               {{ $post->id }} . <a href="{{ route('post.show', $post->id) }}">{{ $post->name }}</a>
           </div>
        @endforeach
    </div>
@endsection
