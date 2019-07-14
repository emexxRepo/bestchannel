<?php

namespace App\Repositories;

interface CompanyRepositoryInterface
{
    public function get($id);

    public function all();

    public function delete($id);

    public function update($id, array $data);

    public function where2($key1, $val1, $key2, $val2);
}
