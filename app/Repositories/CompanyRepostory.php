<?php

namespace App\Repositories;

use App\Company;

class CompanyRepository implements CompanyRepositoryInterface
{

    public function get($id)
    {
        return Company::find($id);
    }


    public function all()
    {
        return Company::all();
    }


    public function delete($id)
    {
        Company::destroy($id);
    }

    public function update($id, array $data)
    {
        return Company::find($id)->update($data);
    }

    public function create(array $data)
    {
        return Company::create($data);
    }
}
