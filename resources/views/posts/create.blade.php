@extends('layouts.main')
@section('content')
    <form action=" {{ route('posts.store') }} " method="post">
        @csrf
        <div class="form-group">
            <label for="title" class="form-label">Заголовок</label>
            <input
            value="{{ old('title') }}"
            type="text" name="title" class="form-control" id="title" aria-describedby="emailHelp">
            
            @error('title')    
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="content" class="form-label">Контент</label>
            <textarea id="content" name="content" placeholder="Контент" class="form-control">{{ old('content') }}</textarea>
            @error('content')    
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="image" class="form-label">Image</label>
            <input
            value="{{ old('image') }}"
            type="text" name="image" class="form-control" id="image">
            @error('image')    
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="category">Категория</label>
            <select class="form-control" id="category" name="category_id">
                @foreach($categories as $category)
                    <option
                        {{ old('category_id') == $category->id ? 'selected' : ''}}
                        value=" {{ $category->id }} "> {{ $category->title }} 
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="tags">Теги</label>
            <select multiple class="form-control" id="tags" name="tags[]">
                @foreach($tags as $tag)
                    <option value="{{ $tag->id }}"> {{ $tag->title }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Опубликовать</button>
    </form>
@endsection