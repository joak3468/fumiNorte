<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class RegisterController extends Controller
{
    public function register(Request $request){
        $userario = [
            'name'     => 'joaquin',
            'username' => 'fumi_admin',
            'password' => 'v3nt1l4d0r.98'
        ];
        $user = User::create($userario );
        return view('web.home');
    }
}
