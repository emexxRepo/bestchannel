<?php

namespace App\Repositories;

interface SocialRepositoryInterface
{
    public function get($id);

    public function all();

    public function delete($id);

    public function update($id, array $data);

    public function create(array $data);
}
