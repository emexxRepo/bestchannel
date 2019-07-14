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

    public function where2($key1, $val1, $key2, $val2)
    {
        return Companies::where($key1, $val1)->where($key2, $val2)->first();
    }
}
