<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\User;
use Auth;


class LoginController extends Controller
{
    public function enter(Request $request)
    {
        if (Auth::attempt(['email' => $request->correo, 'password' => $request->contrasena])) {
            return redirect(route('index2'));
        } else {
            return "no hizo nada";
        }
    }

    public function meter(Request $request)
    {
        $variable = new User();
        $variable->name = 'Oliver Enriquez';
        $variable->email = 'orelenriquez19@gmail.com';
        $variable->password = bcrypt('oliver1234');
        $variable->save();
    }
}
