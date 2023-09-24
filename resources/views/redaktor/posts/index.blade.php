@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <h1 class="text-3xl font-semibold mb-4">Panel redaktora - Lista postów</h1>

    <a href="{{ route('redaktor.posts.create') }}" class="inline-block bg-blue-500 text-white py-2 px-4 rounded-full mb-4 hover:bg-blue-700">Dodaj nowy post</a>

    @foreach ($posts as $post)
        <div class="bg-white rounded-lg shadow-lg mb-4">
            <div class="p-4">
                <h2 class="text-2xl font-semibold mb-2">{{ $post->title }}</h2>
                <p class="text-gray-600">{{ $post->content }}</p>
                <div class="mt-4">
                    <a href="{{ route('redaktor.posts.edit', $post->id) }}" class="inline-block bg-blue-500 text-white py-2 px-4 rounded-full hover:bg-blue-700">Edytuj</a>
                    <form action="{{ route('redaktor.posts.destroy', $post->id) }}" method="POST" class="inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="inline-block bg-red-500 text-white py-2 px-4 rounded-full hover:bg-red-700 ml-2">Usuń</button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach

    {{ $posts->links() }} 
</div>
@endsection
