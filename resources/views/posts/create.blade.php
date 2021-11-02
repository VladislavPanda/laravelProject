@extends('layouts.main')
@section('content')
    <form action=" {{ route('posts.store') }} " method="post">
        @csrf
        <div class="form-group">
            <label for="title" class="form-label">Заголовок</label>
            <input type="text" name="title" class="form-control" id="title" aria-describedby="emailHelp">
        </div>

        <div class="form-group">
            <label for="content" class="form-label">Контент</label>
            <textarea id="content" name="content" placeholder="Контент" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <label for="image" class="form-label">Image</label>
            <input type="text" name="image" class="form-control" id="image">
        </div>

        <button type="submit" class="btn btn-primary">Опубликовать</button>
    </form>
@endsection