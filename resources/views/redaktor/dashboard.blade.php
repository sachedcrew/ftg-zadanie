@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Panel redaktora - Lista postów</h1>
        
        <a href="{{ route('redaktor.posts.create') }}" class="btn btn-primary mb-2">Dodaj nowy post</a>

        @foreach ($posts as $post)
            <div class="card mb-4">
                <div class="card-body">
                    <h2 class="card-title">{{ $post->title }}</h2>
                    <p class="card-text">{{ $post->content }}</p>
                    <a href="{{ route('redaktor.posts.edit', $post->id) }}" class="btn btn-primary">Edytuj</a>
                    <form action="{{ route('redaktor.posts.destroy', $post->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Usuń</button>
                    </form>
                </div>
            </div>
        @endforeach

        {{ $posts->links() }} 
    </div>
@endsection
