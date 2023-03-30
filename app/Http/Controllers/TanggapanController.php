<?php

namespace App\Http\Controllers;

use App\Models\Tanggapan;
use App\Models\Pengaduan;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Auth;

class TanggapanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pengaduan = Pengaduan::get();
        return view('tanggapan.index', compact('pengaduan'));
    }

    public function indexuh()
    {
        $pengaduan = Pengaduan::get();
        return view('layout.laporan.selesai', compact('pengaduan'));
    }

    public function indexih()
    {
        $pengaduan = Pengaduan::get();
        return view('layout.laporan.proses', compact('pengaduan'));
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
        $validateData = $request->validate([
            'tanggapan' => 'required',
            'id_pengaduan' => 'required'
        ]);

        // return  dd($validateData);

        Tanggapan::create([
            'id_pengaduan' => $request->id_pengaduan,
            'tgl_tanggapan' => date('Y-m-d'),
            'tanggapan' => $request->tanggapan,
            'id_petugas' => auth()->user()->id
        ]);

        $pengaduan = Pengaduan::where('id_pengaduan', $request->id_pengaduan)->first();
        $update['status'] = 'selesai';
        $pengaduan->where('id_pengaduan', $request->id_pengaduan)->update($update);
        return redirect(route('tanggapan'))->with('success', 'Tanggapan sudah terkirim!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id_pengaduan)
    {
        $pengaduan = Pengaduan::where('id_pengaduan', $id_pengaduan)->first();
        return view('tanggapan.reply', compact('pengaduan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tanggapan $tanggapan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tanggapan $tanggapan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tanggapan $tanggapan)
    {
        //
    }
}
