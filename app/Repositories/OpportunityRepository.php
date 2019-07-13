<?php

namespace App\Repositories;

use App\Opporunity;

class OpporunityRepository implements OpporunityRepositoryInterface
{

    public function get($id)
    {
        return Opporunity::find($id);
    }


    public function all()
    {
        return Opporunity::all();
    }


    public function delete($id)
    {
        Opporunity::destroy($id);
    }

    public function update($id, array $data)
    {
        return Opporunity::find($id)->update($data);
    }

    public function create(array $data)
    {
        return Opporunity::create($data);
    }
}
