<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\CreateUserRequest;
use App\Repositories\UserRepository;

class AdminController extends Controller
{
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function index()
    {
        $users = $this->userRepository->all();
        return view('admin.users.index', compact('users'));
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(CreateUserRequest $request)
    {
        $validatedData = $request->validated();

        $this->userRepository->create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
            'role' => $validatedData['role'],
        ]);

        return redirect()->route('admin.users.index');
    }

    public function edit($id)
    {
        $user = $this->userRepository->find($id);
        return view('admin.users.edit', compact('user'));
    }

    public function update(CreateUserRequest $request, $id)
    {
        $validatedData = $request->validated();

        $this->userRepository->update($id, [
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => $validatedData['password'] ? bcrypt($validatedData['password']) : null,
            'role' => $validatedData['role'],
        ]);

        return redirect()->route('admin.users.index');
    }

    public function destroy($id)
    {
        $this->userRepository->delete($id);

        return redirect()->route('admin.users.index');
    }
}
