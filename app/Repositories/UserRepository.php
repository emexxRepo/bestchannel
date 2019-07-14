<?php

namespace App\Repositories;

use App\User;

class UserRepository implements UserRepositoryInterface
{

    public function get($id)
    {
        return User::find($id);
    }


    public function all()
    {
        return User::all();
    }


    public function delete($id)
    {
        User::destroy($id);
    }

    public function update($id, array $data)
    {
        return User::find($id)->update($data);
    }

    public function create(array $data)
    {
        return User::create($data);
    }

    public function where(string $key,string $value)
    {
        return User::where($key,$value)->first();
    }
}
