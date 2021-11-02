@extends('layouts.main')

@section('content')
    <div>
        <div> Название:  {{ $post->title }} </div>
        <div> Контент:  {{ $post->content }} </div>
        <div> Картинка:  {{ $post->image }} </div>
    </div>
    <div><a href=" {{ route('posts.edit', $post->id) }} " class="btn btn-primary mb-3">Редактировать</a></div>
    <div>
        <form action=" {{ route('posts.delete', $post->id) }} " method="post">
            @csrf
            @method('delete')
            <input type="submit" value="Удалить" class="btn btn-danger">
        </form>
    </div>
    <div><a href=" {{ route('posts.index') }}">Назад</a></div>
@endsection