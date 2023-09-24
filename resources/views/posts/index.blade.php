@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-3">
    <h1 class="text-3xl font-semibold mb-4">Lista Wpisów</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
        @foreach ($posts as $post)
            <div class="max-w-sm rounded-lg overflow-hidden shadow-md">
                <div class="px-6 py-4">
                    <h3 class="text-xl font-semibold mb-2">{{ $post->title }}</h3>
                    <p class="text-gray-600 text-base">{{ $post->content }}</p>
                </div>
                <div class="px-6 py-4">
                    <a href="{{ route('posts.show', $post->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white py-2 px-4 rounded-full text-center block w-full">Zobacz szczegóły</a>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
