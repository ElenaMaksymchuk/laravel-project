<?php

namespace App\Services;
use App\Models\TypeRepair;

class TypeRepairService
{
    public function getAllTypeRepairs()
    {
        return TypeRepair::all();
    }

    public function createTypeRepair(array $data)
    {
        return TypeRepair::create($data);
    }
}