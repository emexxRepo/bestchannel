<?php

namespace App\Repositories;

use App\Opportunity;

class OpportunityRepository implements OpportunityRepositoryInterface
{

    public function get($id)
    {
        return Opportunity::find($id);
    }


    public function all()
    {
        return Opportunity::all();
    }


    public function delete($id)
    {
        Opportunity::destroy($id);
    }

    public function update($id, array $data)
    {
        return Opportunity::find($id)->update($data);
    }

    public function create(array $data)
    {
        return Opportunity::create($data);
    }
}
