<?php

namespace App\Repositories;

use App\Models\User;
use App\Repositories\BaseRepository;

class UserRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'name',
        'password',
        'email',
        'email_verified_at',
        'role_id'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return User::class;
    }

    public function getAllUsers()
    {
        return User::all();
    }

    public function getUsers()
    {
        return User::where('role_id', '=', 4)->get();
    }

    public function count()
    {
        return User::where('role_id', '=', 4)->count();
    }

    public function findByName(string $name): User
    {
        return User::where('name', $name)->firstOrFail();
    }
}
