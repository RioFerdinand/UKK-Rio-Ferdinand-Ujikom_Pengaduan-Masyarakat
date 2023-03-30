<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {

        if (Auth::user()->role == 'masyarakat') {
            $total = Pengaduan::where('nik', Auth::user()->nik)->count();
            $selesai = Pengaduan::where('nik', Auth::user()->nik)->where('status', 'selesai')->count();
            $proses = Pengaduan::where('nik', Auth::user()->nik)->where('status', 'proses')->count();
        } else {
            $total = Pengaduan::count();
            $selesai = Pengaduan::where('status', 'selesai')->count();
            $proses = Pengaduan::where('status', 'proses')->count();
        }

        return view('index', compact('total', 'selesai', 'proses'));
    }
}
