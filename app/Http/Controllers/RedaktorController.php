<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Requests\CreatePostRequest;
use App\Repositories\PostRepository;

class RedaktorController extends Controller
{
    protected $postRepository;

    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function index()
    {
        $posts = $this->postRepository->all();
        return view('redaktor.posts.index', compact('posts'));
    }

    public function create()
    {
        return view('redaktor.posts.create');
    }

    public function store(CreatePostRequest $request)
    {
        $data = [
            'title' => $request->input('title'),
            'content' => $request->input('content'),
        ];

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/images', $imageName);
            $data['image'] = $imageName;
        }

        $this->postRepository->create($data);

        return redirect()->route('redaktor.posts.index');
    }

    public function edit($id)
    {
        $post = $this->postRepository->find($id);
        return view('redaktor.posts.edit', compact('post'));
    }

    public function update(CreatePostRequest $request, $id)
    {
        $data = [
            'title' => $request->input('title'),
            'content' => $request->input('content'),
        ];

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/images', $imageName);
            $data['image'] = $imageName;
        }

        $this->postRepository->update($id, $data);

        return redirect()->route('redaktor.posts.index');
    }

    public function destroy($id)
    {
        $this->postRepository->delete($id);

        return redirect()->route('redaktor.posts.index');
    }
}
