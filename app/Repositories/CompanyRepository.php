<?php

namespace App\Repositories;

use App\Companies;

class CompanyRepository implements CompanyRepositoryInterface
{

    public function get($id)
    {
        return Companies::find($id);
    }


    public function all()
    {
        return Companies::all();
    }


    public function delete($id)
    {
        Companies::destroy($id);
    }

    public function update($id, array $data)
    {
        return Companies::find($id)->update($data);
    }

    public function create(array $data)
    {
        return Companies::create($data);
    }
}
