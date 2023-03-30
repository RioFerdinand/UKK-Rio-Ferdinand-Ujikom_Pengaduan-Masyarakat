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
            <td>{{ $p->id_pengaduan }}</td>
            <td><img src="{{ asset('storage/'.$p->foto)}}" alt="" style="width:300px;"></td>
            <td>{{ $p->status }}</td>
            @if ($p->status == 'proses')
            <td><a href="{{ route('show',$p->id_pengaduan) }}" class="show">Beri Tanggapan</a></td>
            @elseif ($p->status == 'selesai')
            <td><a href="{{ route('show',$p->id_pengaduan) }}" class="show">Show</a></td>
            @endif
        </tr>
        @endforeach

    </tbody>
</table>

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