<?php

namespace App\Repositories;

interface UserRepositoryInterface
{
    public function get($id);

    public function all();

    public function delete($id);

    public function update($id, array $data);

    public function where(string $key, string $value);
}
