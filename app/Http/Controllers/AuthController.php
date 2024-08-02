<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function isiform(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);
        return redirect('/login');
    }

    public function login()
    {
        return view('login');
    }

    public function ceklogin(Request $request)
    {
        Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ]);

        return redirect('/');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }

    public function home()
    {
        return view('home', ['key' => 'home']);
    }

    public function user()
    {
        $user = User::paginate(5);
        return view('user', ['key' => 'user', 'user' => $user]);
    }


    public function pencarian(Request $request)
    {
        $cari = $request->cari;
        $user = User::where('name', 'like', '%' . $cari . '%')->paginate();
        $user->appends($request->all());
        return view('user', ['key' => '', 'user' => $user]);
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->back()->with('status', 'Delete succes');
    }
}
