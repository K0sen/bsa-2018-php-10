<?php

namespace App\Services;

use App\Entity\User;
use Illuminate\Database\Eloquent\Collection;

class UserRepository
{
    /**
     * @return Collection
     */
    public function findAll(): Collection
    {
        return User::all();
    }

    /**
     * @param $id
     * @return User|null
     */
    public function findById($id): ?User
    {
        return User::find($id);
    }

}
