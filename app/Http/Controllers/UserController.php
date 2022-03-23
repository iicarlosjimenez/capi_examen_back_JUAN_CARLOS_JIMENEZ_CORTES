<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserDomicilio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        $user = new User();
        $users = UserDomicilio::select('*', DB::raw('TIMESTAMPDIFF(YEAR,fecha_nacimiento,CURDATE()) AS edad'))
            ->join($user->getTable(), $user->getKeyName(), 'user_id')
            ->get();
        return response()->json($users);
    }
}
