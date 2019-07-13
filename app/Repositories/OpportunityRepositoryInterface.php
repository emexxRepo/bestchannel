<?php

namespace App\Repositories;

interface OpporunityRepositoryInterface
{
    public function get($id);

    public function all();

    public function delete($id);

    public function update($id,array $data);
}
