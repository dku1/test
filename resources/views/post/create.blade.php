@extends('layouts.main')
@section('content')
    <div>
        <form action="{{ route('post.store') }}" method="post">
            @csrf
            <input type="text" name="name" value="{{ old('name') }}">

            @error('name')
            <p>{{ $message }}</p>
            @enderror
            <br>
            <textarea name="content" id="" cols="30" rows="10">{{ old('content') }}</textarea>
            <br>
            <input type="text" name="image" value="{{ old('image') }}">
            <br>
            <select name="category_id" id="">
                @foreach($categories as $category)
                    <option {{ old('category_id') == $category->id ? ' selected' : '' }} value="{{ $category->id }}">{{ $category->title }}</option>
                @endforeach
            </select>
            <br>
            <input type="submit" value="Создать">
        </form>
    </div>
@endsection
