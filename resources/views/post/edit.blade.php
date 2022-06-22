@extends('layouts.main')
@section('content')
    <div>
        <form action="{{ route('post.update', $post->id) }}" method="post">
            @csrf
            @method('patch')
            <input type="text" name="name" value="{{ $post->name }}">
            <br>
            <textarea name="content" id="" cols="30" rows="10">{{ $post->content }}</textarea>
            <br>
            <input type="text" name="image" value="{{ $post->image }}">
            <br>
            <input type="submit" value="Редактировать">
        </form>
    </div>
@endsection
