@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <h1 class="text-3xl font-semibold mb-4">Dodaj nowy post</h1>
    
    <form method="POST" action="{{ route('redaktor.posts.store') }}" class="max-w-md mx-auto">
        @csrf
        <div class="mb-4">
            <label for="title" class="block text-gray-700 font-semibold">Tytuł:</label>
            <input type="text" name="title" id="title" class="border border-gray-300 rounded-lg py-2 px-4 w-full focus:outline-none focus:ring focus:border-blue-500" required>
        </div>
        <div class="mb-4">
            <label for="content" class="block text-gray-700 font-semibold">Treść:</label>
            <textarea name="content" id="content" class="border border-gray-300 rounded-lg py-2 px-4 w-full h-40 focus:outline-none focus:ring focus:border-blue-500" required></textarea>
        </div>
        <div class="form-group">
            <label for="image">Obrazek</label>
            <input type="file" name="image" id="image" class="form-control">
        </div>
        <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-full hover:bg-blue-700">Dodaj post</button>
    </form>
</div>
@endsection
