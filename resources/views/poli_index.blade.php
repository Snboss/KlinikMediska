@extends('layouts.sbadmin2')
@section('content')
    <div class="card">
        <div class="card-header"> {{ $judul }} </div>
        <div class="card-body">
            <a href="/poli/create" class="btn btn-primary mb-3">Tambah Data</a>
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th width="1%">ID</th>
                        <th>Nama Poli</th>
                        <th width="15%">Biaya Poli</th>
                        <th width="30%">Jadwal</th>
                        <th width="16%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($poli as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>
                                <div>Nama Poli: <b>{{ $item->nama }}</b></div>
                                <div>Nama Dokter: <b>{{ $item->dokter->nama_dokter }}</b></div>
                                <div>Deskripsi: {{ $item->deskripsi }}</div>
                            </td>
                            <td>Rp. {{ number_format($item->biaya, 0, ',', '.') }}</td>
                            <td>
                                @foreach ($item->jadwals as $jadwal)
                                    <div>{{ $jadwal->hari }}: {{ $jadwal->jam_mulai }} - {{ $jadwal->jam_selesai }}</div>
                                @endforeach
                            </td>
                            <td>
                                <a href="/poli/{{ $item->id }}/edit" class="btn btn-primary">
                                    Edit
                                </a>
                                <form action="/poli/{{ $item->id }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"
                                        onclick="return confirm('Apakah anda yakin?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $poli->links() }}
        </div>
    </div>
@endsection
