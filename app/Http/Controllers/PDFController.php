<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use App\Models\Tanggapan;
use Barryvdh\DomPDF\Facade\Pdf;

use Illuminate\Http\Request;

class PDFController extends Controller
{

    public function index() {
        return view('layout.laporan.laporan');
    }

    public function generatePDF()
    {
        $pengaduan = Pengaduan::oldest()->get();
        $tanggapan = Tanggapan::oldest()->get();

        $data = [
            'pengaduan' => $pengaduan,
            'tanggapan' => $tanggapan
        ];

        $pdf = PDF::loadView('tanggapan.generate', $data);

        return $pdf->download('laporan pengaduan masyarakat.pdf');
    }

    public function selesaiPDF()
    {
        $pengaduan = Pengaduan::oldest()->get();
        $tanggapan = Tanggapan::oldest()->get();

        $data = [
            'pengaduan' => $pengaduan,
            'tanggapan' => $tanggapan
        ];

        $pdf = PDF::loadView('dashboard.downpros', $data);

        return $pdf->download('laporan hanya selesai.pdf');
    }

    public function prosesPDF()
    {
        $pengaduan = Pengaduan::oldest()->get();
        $tanggapan = Tanggapan::oldest()->get();

        $data = [
            'pengaduan' => $pengaduan,
            'tanggapan' => $tanggapan
        ];

        $pdf = PDF::loadView('dashboard.downsai', $data);

        return $pdf->download('laporan hanya selesai.pdf');
    }
}
