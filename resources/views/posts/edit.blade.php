@extends('layouts.main')

@section('content')
    <form action=" {{ route('posts.update', $post->id) }} " method="post">
        @csrf
        @method('patch')
        <div class="form-group">
            <label for="title" class="form-label">Заголовок</label>
            <input type="text" name="title" class="form-control" id="title" aria-describedby="emailHelp" value=" {{ $post->title }} ">
        </div>

        <div class="form-group">
            <label for="content" class="form-label">Контент</label>
            <textarea id="content" name="content" placeholder="Контент" class="form-control" value=" {{ $post->content }} "></textarea>
        </div>

        <div class="form-group">
            <label for="image" class="form-label">Image</label>
            <input type="text" name="image" class="form-control" id="image" value=" {{ $post->image }} ">
        </div>

        <button type="submit" class="btn btn-primary">Опубликовать</button>
    </form>
@endsection