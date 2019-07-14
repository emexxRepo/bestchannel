<?php

namespace App\Repositories;

use App\Social;

class SocialRepository implements SocialRepositoryInterface
{

    public function get($id)
    {
        return Social::find($id);
    }


    public function all()
    {
        return Social::all();
    }


    public function delete($id)
    {
        Social::destroy($id);
    }

    public function update($id, array $data)
    {
        return Social::find($id)->update($data);
    }

    public function create(array $data)
    {
        return Social::create($data);
    }
}
