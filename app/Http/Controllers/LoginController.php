<?php

namespace App\Http\Controllers;

use App\Models\Login;
use Illuminate\Auth\Events\Logout;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('login');
    }

    public function logout() {
        
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $login = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($login)) {
            $request->session()->regenerate();
            if (Auth::user()->role == 'masyarakat') {
               return redirect()->intended('/dashrakyat')->with('success', 'Login Berhasil!');
            }elseif(Auth::user()->role == 'petugas') {
               return redirect()->intended('/dashpetugas')->with('success', 'login sukses!');
            }}

        if (Auth::attempt($login)) {
            $request->session()->regenerate();

            return redirect('/dashboard');
        }

        return redirect('/login')->with('fail', 'Login gagal! Silahkan coba lagi');
    }

    /**
     * Display the specified resource.
     */
    public function show(Login $login)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Login $login)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Login $login)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Login $login)
    {
        //
    }
}
