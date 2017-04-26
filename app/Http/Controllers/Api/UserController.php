<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Transformers\UserTransformer;
use Dingo\Api\Routing\Helpers;
use App\Models\User;

class UserController extends Controller
{
    use Helpers;

    public function getUsers()
    {
        $users = User::paginate(2);

        return $this->response->paginator($users, new UserTransformer);
    }
}
