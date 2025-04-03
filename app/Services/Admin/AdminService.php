<?php

namespace App\Services\Admin;

use App\Repositories\UserRepository;
use App\Repositories\RoleRepository;
use Illuminate\Support\Facades\Hash;

class AdminService
{
    public function __construct(
        private UserRepository $userRepository,
        private RoleRepository $roleRepository
    ) {}

    public function getPaginatedUsers($perPage = 10)
    {
        return $this->userRepository->allQuery()
            ->with(['role'])
            ->paginate($perPage);
    }

    public function createUser(array $data)
    {
        $data['password'] = Hash::make($data['password']);
        return $this->userRepository->create($data);
    }

    public function updateUser($id, array $data)
    {
        if (isset($data['password'])) {
            $data['password'] = Hash::make($data['password']);
        }
        return $this->userRepository->update($data, $id);
    }

    public function deleteUser($id)
    {
        return $this->userRepository->delete($id);
    }

    public function getUser($id)
    {
        return $this->userRepository->find($id);
    }

    public function getAllRoles()
    {
        return $this->roleRepository->allQuery()
            ->orderBy('name')
            ->get();
    }
} 