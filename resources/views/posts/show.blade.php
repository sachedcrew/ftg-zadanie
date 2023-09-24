@extends('layouts.app')

@section('content')
    <div class="container mx-auto mt-4">
        <div class="w-full max-w-md mx-auto">
            <div class="bg-white rounded-lg shadow-lg">
                <div class="bg-gray-300 p-4 text-lg font-semibold border-b">
                    {{ $post->title }}
                </div>
                <img src="{{ asset('storage/images/' . $post->image) }}" alt="Obrazek posta">
                <div class="p-4">
                    <p class="text-gray-700">{{ $post->content }}</p>
                </div>
                <div class="p-4">
                    <a href="{{ route('posts.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Powrót do listy postów</a>
                </div>
            </div>
        </div>
    </div>
@endsection
