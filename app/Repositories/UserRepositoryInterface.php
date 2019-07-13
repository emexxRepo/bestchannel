<?php

namespace App\Repositories;

interface UserRepositoryInterface
{
    public function get($id);

    public function all();

    public function delete($id);
}
