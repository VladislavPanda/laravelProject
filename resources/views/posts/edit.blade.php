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
            <textarea id="content" name="content" placeholder="Контент" class="form-control" value=" {{ $post->content }} ">{{ $post->content }}</textarea>
        </div>

        <div class="form-group">
            <label for="image" class="form-label">Image</label>
            <input type="text" name="image" class="form-control" id="image" value=" {{ $post->image }} ">
        </div>

        <div class="form-group">
            <label for="category">Категория</label>
            <select class="form-control" id="category" name="category_id">
                @foreach($categories as $category)
                    <option
                        {{ $category->id === $post->category->id ? 'selected' : ''}}
                           value=" {{ $category->id }} "> {{ $category->title }} 
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="tags">Теги</label>
            <select multiple class="form-control" id="tags" name="tags[]">
                @foreach($tags as $tag)
                    <option
                    @foreach($post->tags as $postTag)
                        {{ $tag->id === $postTag->id ? 'selected' : ''}}
                    @endforeach
                    value="{{ $tag->id }}"> {{ $tag->title }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Опубликовать</button>
    </form>
@endsection