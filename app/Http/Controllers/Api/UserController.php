<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Transformers\UserTransformer;
use Dingo\Api\Routing\Helpers;
use App\Models\User;
use App\Models\Role;

class UserController extends Controller
{
    use Helpers;

    public function getUsers()
    {
        $users = User::paginate(2);

        return $this->response->paginator($users, new UserTransformer);
    }

    public function attachUserRole($userId, $role)
    {
        $user = User::find($userId);

        $roleId = Role::where('name', $role)->first();

        $user->roles()->attach($roleId);

        return $user;
    }

    public function getUserRole($userId)
    {
        return User::find($userId)->roles;
    }

    public function attachPermission(Request $request)
    {
        $paramerters = $request->only('permission', 'role');

        $permissionParam = $paramerters['permission'];
        $roleParam = $paramerters['role'];

        $role = Role::where('name', $roleParam)->first();
        $permission = Permission::where('name', $permissionParam)->first();

        $role->attachPermission($permission);

        return $this->response->created();
    }

    public function getPermissions($roleParam)
    {
        $role = Role::where('name', $roleParam)->first();

        return $role->perms;   
    }
}
