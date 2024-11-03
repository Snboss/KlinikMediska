@extends('layouts.sbadmin2')

@section('content')
    <div class="card">
        <div class="card-header">{{ $judul }}</div>
        <div class="card-body">
            <form action="/poli/{{ $poli->id }}" method="POST">
                @method('PUT')
                @csrf
                <div class="row mt-2">
                    <div class="col-md-6 form-group ">
                        <label for="nama">Nama Poli</label>
                        <input type="text" name="nama" class="form-control" value="{{ old('nama') ?? $poli->nama }}" autofocus />
                        <span class="text-danger">{{ $errors->first('nama') }}</span>
                    </div>
                    <div class="col-md-6 form-group ">
                        <label for="biaya">Biaya Poli</label>
                        <input type="text" name="biaya" class="form-control" value="{{ old('biaya') ?? $poli->biaya }}" />
                        <span class="text-danger">{{ $errors->first('biaya') }}</span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi Poli</label>
                    <textarea name="deskripsi" rows="3" class="form-control">{{ old('deskripsi') ?? $poli->deskripsi }}</textarea>
                    <span class="text-danger">{{ $errors->first('deskripsi') }}</span>
                </div>
                <div class="form-group mt-2">
                    <label for="dokter_id">Pilih Dokter</label>
                    <select name="dokter_id" class="form-control">
                        @foreach ($list_dokter as $item)
                            <option value="{{ $item->id }}" @if($item->id == $poli->dokter_id) selected @endif>
                                {{ "{$item->nama_dokter} - Spesialis {$item->spesialis}" }}
                            </option>
                        @endforeach
                    </select>
                    <span class="text-danger">{{ $errors->first('dokter_id') }}</span>
                </div>
                <div class="form-group mt-2">
                    <h4>Jadwal</h4>
                    <div id="jadwal-section">
                        @foreach ($poli->jadwals as $index => $jadwal)
                            <div class="jadwal-item mb-2">
                                <div class="row">
                                    <div class="col-md-4">
                                        <input type="text" name="jadwal[{{ $index }}][hari]" class="form-control" value="{{ old('jadwal.'.$index.'.hari') ?? $jadwal->hari }}" placeholder="Hari" required>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="time" name="jadwal[{{ $index }}][jam_mulai]" class="form-control" value="{{ old('jadwal.'.$index.'.jam_mulai') ?? $jadwal->jam_mulai }}" placeholder="Jam Mulai" required>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="time" name="jadwal[{{ $index }}][jam_selesai]" class="form-control" value="{{ old('jadwal.'.$index.'.jam_selesai') ?? $jadwal->jam_selesai }}" placeholder="Jam Selesai" required>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <button type="button" id="add-jadwal" class="btn btn-secondary mt-2">Tambah Jadwal</button>
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="/poli" class="btn btn-secondary">Kembali</a>
                </div>
            </form>
        </div>
    </div>

    <script>
        document.getElementById('add-jadwal').addEventListener('click', function() {
            let jadwalSection = document.getElementById('jadwal-section');
            let count = jadwalSection.getElementsByClassName('jadwal-item').length;
            let newItem = `
                <div class="jadwal-item mb-2">
                    <div class="row">
                        <div class="col-md-4">
                            <input type="text" name="jadwal[${count}][hari]" class="form-control" placeholder="Hari" required>
                        </div>
                        <div class="col-md-4">
                            <input type="time" name="jadwal[${count}][jam_mulai]" class="form-control" placeholder="Jam Mulai" required>
                        </div>
                        <div class="col-md-4">
                            <input type="time" name="jadwal[${count}][jam_selesai]" class="form-control" placeholder="Jam Selesai" required>
                        </div>
                    </div>
                </div>
            `;
            jadwalSection.insertAdjacentHTML('beforeend', newItem);
        });
    </script>
@endsection
