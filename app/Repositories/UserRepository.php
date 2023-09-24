<?php

namespace App\Repositories;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class UserRepository
{
    public function all()
    {
        return User::paginate(10);
    }

    public function create(array $data)
    {
        return User::create($data);
    }

    public function update($id, array $data)
    {
        $user = User::findOrFail($id);
        $user->update($data);
        return $user;
    }

    public function delete($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
    }

    public function store(array $data)
    {
        return $this->create($data);
    }
}