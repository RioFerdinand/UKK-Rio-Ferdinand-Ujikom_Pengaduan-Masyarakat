<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Auth;

class PengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pengaduan.add');
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

        // return $request->file('foto')->store('post-image');
        $validateData = $request->validate([
            'isi_laporan' => 'required',
            'foto' => 'required|mimes:png,jpg,jpeg',
        ]);

        // $image = $request->file('foto');

        // $path = $image->move(public_path('foto'), $image->getClientOriginalName());
        // $explode = explode("\\", $path);

        // return dd($explode);

        if ($request->file('foto')) {
            $validateData['foto'] = $request->file('foto')->store('pengaduan');
        }
        // dd($image);
        Pengaduan::create([
            'isi_laporan' => $request->isi_laporan,
            'foto' => $validateData['foto'],
            'tgl_pengaduan' => date('Y-m-d'),
            'nik' => auth()->user()->nik,
            'status' => 'proses',
        ]);
        // $request->session()

        return redirect('/pengaduan')->with('success', 'Pengaduan sudah dikirim! Silahkan tunggu balasannya!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pengaduan $pengaduan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pengaduan $pengaduan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pengaduan $pengaduan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pengaduan $pengaduan)
    {
        //
    }
}
