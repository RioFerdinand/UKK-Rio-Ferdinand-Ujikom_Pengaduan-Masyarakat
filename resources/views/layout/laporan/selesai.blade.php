@extends('layout.layout')
@section('content')

<div class="row" style="margin-top: 5%; padding-top: 5%;">
<table class="table table-bordered" style="margin-left: 11%;">
    <thead>
        <tr>
            <th scope="col">No.</th>
            <th scope="col">Bukti</th>
            <th scope="col">Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach($pengaduan as $p)
        <tr>
            @if ($p->status == 'selesai')
            <td>{{ $p->id_pengaduan }}</td>
            <td><img src="{{ asset('storage/'.$p->foto)}}" alt="" style="width:300px;"></td>
            <td>{{ $p->status }}</td>
            @endif
            {{-- @if ($p->status == 'proses')
            <td><a href="{{ route('show',$p->id_pengaduan) }}" class="show">Beri Tanggapan</a></td>
            @elseif ($p->status == 'selesai')
            <td><a href="{{ route('show',$p->id_pengaduan) }}" class="show">Show</a></td>
            @endif --}}
        </tr>
        @endforeach

    </tbody>
</table><br>
<h2 style="margin-left: 30%;">Silahkan unduh laporan hanya selesai</h2>
<a href="/selesai-pdf" class="btn btn-primary" style="margin-top: 10px; margin-left: 125px;">Download</a>

<!-- <table>
    <thead>
        <th>id</th>
        <th>foto</th>
        <th>status</th>
    </thead>
    <tbody>
        @foreach($pengaduan as $p)
        <tr>
            <td>{{ $p->id_pengaduan }}</td>
            <td><img src="{{ asset('storage/'.$p->foto)}}" alt=""></td>
        </tr>
        @endforeach
    </tbody>
</table> -->
</div>
@endsection