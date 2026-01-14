<?php

namespace App\Repositories;

use App\Models\Address;
use App\Repositories\Contracts\AddressRepositoryInterface;

class AddressRepository implements AddressRepositoryInterface
{
    public function all()
    {
        return Address::all();
    }

    public function find(int $id): ?Address
    {
        return Address::find($id);
    }

    public function create(array $data): Address
    {
        return Address::create($data);
    }

    public function update(Address $address, array $data): Address
    {
        $address->update($data);
        return $address;
    }

    public function delete(Address $address): bool
    {
        return $address->delete();
    }
}
