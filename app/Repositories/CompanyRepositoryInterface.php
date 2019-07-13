<?php

namespace App\Repositories;

interface CompanyRepositoryInterface
{
    public function get($id);

    public function all();

    public function delete($id);

    public function update($id,array $data);
}
