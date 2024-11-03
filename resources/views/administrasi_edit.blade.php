@extends('layouts.sbadmin2')
@section('content')
    <style>
        dl {
            margin-bottom: 0;
            padding-bottom: 0;
        }

        dd {
            margin-bottom: 0;
            padding-bottom: 0;
        }
    </style>
    <div class="card">
        <div class="card-header">
            Edit Administrasi {{ $administrasi->kode_administrasi }}
        </div>
        <div class="card-body">
            <form action="{{ route('administrasi.update', $administrasi->id) }}" method="POST">
                @method('PUT')
                @csrf

                <dl class="row">
                    <dt class="col-sm-3">Kode Administrasi</dt>
                    <dd class="col-sm-9">: {{ $administrasi->kode_administrasi }}</dd>
                </dl>
                <dl class="row">
                    <dt class="col-sm-3">Tanggal Berobat</dt>
                    <dd class="col-sm-9">: {{ $administrasi->tanggal }}</dd>
                </dl>
                <dl class="row">
                    <dt class="col-sm-3">Nama Pasien</dt>
                    <dd class="col-sm-9">: {{ $administrasi->pasien->nama_pasien }}</dd>
                </dl>
                <dl class="row">
                    <dt class="col-sm-3">Poli Kunjungan</dt>
                    <dd class="col-sm-9">: {{ $administrasi->poli }}</dd>
                </dl>
                <dl class="row">
                    <dt class="col-sm-3">Dokter</dt>
                    <dd class="col-sm-9">: {{ $administrasi->dokter->nama_dokter }}</dd>
                </dl>
                <dl class="row">
                    <dt class="col-sm-3">Biaya</dt>
                    <dd class="col-sm-9">: Rp. {{ number_format($administrasi->biaya, 0, ',', '.') }}</dd>
                </dl>
                <dl class="row">
                    <dt class="col-sm-3">Biaya Tambahan</dt>
                    <dd class="col-sm-9">
                        <input type="number" name="biaya_tambahan" id="biaya_tambahan" class="form-control" value="{{ old('biaya_tambahan', $administrasi->biaya_tambahan) }}" oninput="calculateTotal()">
                        <span class="text-danger">{{ $errors->first('biaya_tambahan') }}</span>
                    </dd>
                </dl>
                <dl class="row">
                    <dt class="col-sm-3">Total Biaya</dt>
                    <dd class="col-sm-9">
                        <input type="text" name="total_biaya" id="total_biaya" class="form-control" value="{{ old('total_biaya', $administrasi->total_biaya) }}" readonly>
                    </dd>
                </dl>
                <dl class="row">
                    <dt class="col-sm-3">Keluhan</dt>
                    <dd class="col-sm-9">: {{ $administrasi->keluhan }}</dd>
                </dl>
                <h5 class="mt-3">Hasil Diagnosa Dokter</h5>
                <div class="form-group">
                    <textarea name="diagnosis" rows="3" class="form-control" autofocus>{{ $administrasi->diagnosis }}</textarea>
                    <span class="text-danger">{{ $errors->first('diagnosis') }}</span>
                </div>
                <button type="submit" class="btn btn-primary">SIMPAN</button>
            </form>
        </div>
    </div>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const biayaTambahanInput = document.getElementById('biaya_tambahan');
        const totalBiayaInput = document.getElementById('total_biaya');
        const baseBiaya = {{ $administrasi->biaya }};

        function calculateTotal() {
            const biayaTambahan = parseFloat(biayaTambahanInput.value) || 0;
            const totalBiaya = baseBiaya + biayaTambahan;

            totalBiayaInput.value = totalBiaya.toFixed(2);
        }

        biayaTambahanInput.addEventListener('input', calculateTotal);

        // Initial calculation on page load
        calculateTotal();
    });
    </script>
@endsection
