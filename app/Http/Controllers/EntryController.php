<?php

namespace App\Http\Controllers;

use App\Enums\Role;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class EntryController extends Controller
{
    public function register(UserRequest $request){
        $user = new User();
        $user->fill($request->validated());
        $user->role = Role::USER;
        $user->password = Hash::make($request['password']);
        $user->save();
        return redirect()->route('index')
            ->with('success', 'Đăng kí thành công');
    }
    public function login(LoginRequest $request){
        $request->validated();
        $credentials = $request->only('username', 'password');
        if(Auth::attempt($credentials)){
        return redirect()->route('index');
        }
        else{
            return back()->with('error-login','Invalid account and/or password. Please check and try again.');
        }

    }
    public function logout(){
        Auth::logout();
        return redirect()->route('index');
    }
}
