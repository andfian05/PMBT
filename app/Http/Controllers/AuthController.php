<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input; 
use Illuminate\Support\Facades\Auth;

use Redirect; 

use Illuminate\Http\Request;

use App\Models\User;
use DB;

class AuthController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        if (Auth::attempt($request->only('email', 'password'))) {
            $account = DB::table('users')->where('email', $request->email)->first();
  
            if ($account->role == 'Administrator') {
                Auth::guard('administrator')->LoginUsingId($account->id);
                return redirect('administrator');
            } elseif ($account->role == 'Panitia A') {
                Auth::guard('panitia-a')->LoginUsingId($account->id);
                return redirect('dashboard/panitia-a');
            } elseif ($account->role == 'Panitia B') {
                Auth::guard('panitia-b')->LoginUsingId($account->id);
                return redirect('dashboard/panitia-b');
            } elseif ($account->role == 'Panitia C') {
                Auth::guard('panitia-c')->LoginUsingId($account->id);
                return redirect('dashboard/panitia-c');
            }
        }

        return redirect('/login')->with('status', 'Username atau Password Anda Salah');
    }
}
