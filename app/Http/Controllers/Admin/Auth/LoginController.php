<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function show(){
        return view('auth.login');
    }

    public function login(LoginRequest $request){
        $credentials = $request->getCredentials();
        dd(Auth::attempt($credentials));
        if(!Auth::validate($credentials)){
            return abort('404');
        }else{
            $user = Auth::getProvider()->retrieveByCredentials($credentials);
            Auth::login($user);
            return $this->authenticated($request, $user);
        }
    }

    public function authenticated(Request $request, $user){
        return redirect('admin.home');
    }
}
