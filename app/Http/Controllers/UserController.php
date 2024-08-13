<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        $perPage = min($request->get('per_page', 10), 50); //max 50

        try {
            $users = User::search()
                ->select(['id', 'name', 'email', 'email_verified_at'])
                ->paginate($perPage);

            return $this->response(true, 'User Lists!', 200, $users);
        } catch (\Exception $e) {
            return $this->response(false, $e->getMessage(), $e->getCode());
        }
    }
}
