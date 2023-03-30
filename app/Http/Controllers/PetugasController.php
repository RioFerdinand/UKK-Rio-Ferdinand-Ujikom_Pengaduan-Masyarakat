<?php

namespace App\Http\Controllers;

use App\Models\Petugas;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PetugasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('petugas.registerpetugas');
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
        // return $request;
        $validateData = $request->validate([
            'nik' => 'required',
            'nama_lengkap' => 'required',
            'username' => 'required',
            'password' => 'required',
            'telp' => 'required',
            'jenis_kelamin' => 'required' ,
            'role' => 'required'  
        ]);

        $validateData['password'] = bcrypt($validateData['password']);
        // dd($validateData);
        User::create($validateData);
        // $request->session()

        return redirect('/regispetugas')->with('success', 'Akun anda sudah terbuat! Silahkan Login!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Petugas $petugas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Petugas $petugas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Petugas $petugas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Petugas $petugas)
    {
        //
    }
}
