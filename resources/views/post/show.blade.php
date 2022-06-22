@extends('layouts.main')
@section('content')
    <div>
        <p>{{ $post->name }}</p>
        <p>{{ $post->content }}</p>
    </div>
@endsection
