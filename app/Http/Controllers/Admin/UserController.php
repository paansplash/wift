<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Controllers\AppBaseController;
use App\Services\Admin\AdminService;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;

class UserController extends AppBaseController
{
    /** @var AdminService $adminService*/
    private $adminService;

    public function __construct(AdminService $adminService)
    {
        $this->adminService = $adminService;
    }

    /**
     * Display a listing of the User.
     */
    public function index(Request $request)
    {
        $users = $this->adminService->getPaginatedUsers();

        return view('pages.admin.users.index')
            ->with('users', $users);
    }

    /**
     * Show the form for creating a new User.
     */
    public function create()
    {
        $roles = $this->adminService->getAllRoles();

        return view('pages.admin.users.create', compact('roles'));
    }

    /**
     * Store a newly created User in storage.
     */
    public function store(CreateUserRequest $request)
    {
        $user = $this->adminService->createUser($request->all());

        Flash::success('User saved successfully.');

        return redirect(route('admin.users.index'));
    }

    /**
     * Display the specified User.
     */
    public function show($id)
    {
        $user = $this->adminService->getUser($id);

        if (empty($user)) {
            Flash::error('User not found');
            return redirect(route('admin.users.index'));
        }

        return view('pages.admin.users.show')->with('user', $user);
    }

    /**
     * Show the form for editing the specified User.
     */
    public function edit($id)
    {
        $user = $this->adminService->getUser($id);
        $roles = $this->adminService->getAllRoles();

        if (empty($user)) {
            Flash::error('User not found');
            return redirect(route('admin.users.index'));
        }

        return view('pages.admin.users.edit', compact('roles', 'user'));
    }

    /**
     * Update the specified User in storage.
     */
    public function update($id, UpdateUserRequest $request)
    {
        $user = $this->adminService->updateUser($id, $request->all());

        if (empty($user)) {
            Flash::error('User not found');
            return redirect(route('admin.users.index'));
        }

        Flash::success('User updated successfully.');
        return redirect(route('admin.users.index'));
    }

    /**
     * Remove the specified User from storage.
     */
    public function destroy($id)
    {
        $result = $this->adminService->deleteUser($id);

        if (!$result) {
            Flash::error('User not found');
            return redirect(route('admin.users.index'));
        }

        Flash::success('User deleted successfully.');
        return redirect(route('admin.users.index'));
    }
}
