<?php

namespace App\Repositories;

use App\Apply;

class ApplyRepository implements ApplyRepositoryInterface
{

    public function get($id)
    {
        return Apply::find($id);
    }


    public function all()
    {
        return Apply::all();
    }


    public function delete($id)
    {
        Apply::destroy($id);
    }

    public function update($id, array $data)
    {
        return Apply::find($id)->update($data);
    }

    public function create(array $data)
    {
        return Apply::create($data);
    }
}
