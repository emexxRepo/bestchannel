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

}
