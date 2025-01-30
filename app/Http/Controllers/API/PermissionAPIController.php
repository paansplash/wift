<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatePermissionAPIRequest;
use App\Http\Requests\API\UpdatePermissionAPIRequest;
use App\Models\Permission;
use App\Repositories\PermissionRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;

/**
 * Class PermissionAPIController
 */
class PermissionAPIController extends AppBaseController
{
    private PermissionRepository $permissionRepository;

    public function __construct(PermissionRepository $permissionRepo)
    {
        $this->permissionRepository = $permissionRepo;
    }

    /**
     * Display a listing of the Permissions.
     * GET|HEAD /permissions
     */
    public function index(Request $request): JsonResponse
    {
        $permissions = $this->permissionRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($permissions->toArray(), 'Permissions retrieved successfully');
    }

    /**
     * Store a newly created Permission in storage.
     * POST /permissions
     */
    public function store(CreatePermissionAPIRequest $request): JsonResponse
    {
        $input = $request->all();

        $permission = $this->permissionRepository->create($input);

        return $this->sendResponse($permission->toArray(), 'Permission saved successfully');
    }

    /**
     * Display the specified Permission.
     * GET|HEAD /permissions/{id}
     */
    public function show($id): JsonResponse
    {
        /** @var Permission $permission */
        $permission = $this->permissionRepository->find($id);

        if (empty($permission)) {
            return $this->sendError('Permission not found');
        }

        return $this->sendResponse($permission->toArray(), 'Permission retrieved successfully');
    }

    /**
     * Update the specified Permission in storage.
     * PUT/PATCH /permissions/{id}
     */
    public function update($id, UpdatePermissionAPIRequest $request): JsonResponse
    {
        $input = $request->all();

        /** @var Permission $permission */
        $permission = $this->permissionRepository->find($id);

        if (empty($permission)) {
            return $this->sendError('Permission not found');
        }

        $permission = $this->permissionRepository->update($input, $id);

        return $this->sendResponse($permission->toArray(), 'Permission updated successfully');
    }

    /**
     * Remove the specified Permission from storage.
     * DELETE /permissions/{id}
     *
     * @throws \Exception
     */
    public function destroy($id): JsonResponse
    {
        /** @var Permission $permission */
        $permission = $this->permissionRepository->find($id);

        if (empty($permission)) {
            return $this->sendError('Permission not found');
        }

        $permission->delete();

        return $this->sendSuccess('Permission deleted successfully');
    }
}
