<?php

namespace App\Repositories;

use App\Sector;

class SectorRepository implements SectorRepositoryInterface
{

    public function get($id)
    {
        return Sector::find($id);
    }


    public function all()
    {
        return Sector::all();
    }


    public function delete($id)
    {
        Sector::destroy($id);
    }

    public function update($id, array $data)
    {
        return Sector::find($id)->update($data);
    }

    public function create(array $data)
    {
        return Sector::create($data);
    }
}
