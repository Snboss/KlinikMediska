@extends('layouts.sbadmin2')
@section('content')
<div class="card">
    <div class="card-header">
        Tambah Administrasi
    </div>
    <div class="card-body">
        <form action="{{ route('administrasi.store') }}" method="POST">
            @method('POST')
            @csrf
            <div class="form-group">
                <label for="tanggal">Tanggal</label>
                <input type="date" name="tanggal" class="form-control" value="{{ old('tanggal') ?? date('Y-m-d') }}">
                <span class="text-danger">{{ $errors->first('tanggal') }}</span>
            </div>
            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="pasien_id">Pilih Pasien atau <a href="/pasien/create" target="blank">Buat Baru</a></label>
                    <select name="pasien_id" id="pasien_id" class="form-control">
                        @foreach ($list_pasien as $item)
                            <option value="{{ $item->id }}" @selected(old('pasien_id') == $item->id)>
                                {{ $item->kode_pasien }} - {{ $item->nama_pasien }} - {{ $item->jenis_kelamin }}
                            </option>
                        @endforeach
                    </select>
                    <span class="text-danger">{{ $errors->first('pasien_id') }}</span>
                </div>
                <div class="col-md-6 form-group">
                    <label for="poli_id">Pilih Poli Tujuan</label>
                    <select name="poli_id" id="poli_id" class="form-control">
                        @foreach ($list_poli as $item)
                            <option value="{{ $item->id }}" data-biaya="{{ $item->biaya }}" @selected(old('poli_id') == $item->id)>
                                Poli {{ $item->nama }} - Biaya {{ number_format($item->biaya, 0, ',', '.') }}
                            </option>
                        @endforeach
                    </select>
                    <span class="text-danger">{{ $errors->first('poli_id') }}</span>
                </div>
                <div class="col-md-6 form-group">
                    <label for="obat_id">Pilih Obat</label>
                    <select name="obat_id" id="obat_id" class="form-control">
                        @foreach ($list_obat as $item)
                            <option value="{{ $item->id }}" data-harga_jual="{{ $item->harga_jual }}" @selected(old('obat_id') == $item->id)>
                                Obat {{ $item->nama_obat }} - Harga {{ number_format($item->harga_jual, 0, ',', '.') }}
                            </option>
                        @endforeach
                    </select>
                    <span class="text-danger">{{ $errors->first('poli_id') }}</span>
                </div>
            </div>
            <div class="form-group">
                <label for="keluhan">Keluhan</label>
                <textarea name="keluhan" rows="3" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="biaya_tambahan">Biaya Tambahan</label>
                <input type="number" name="biaya_tambahan" id="biaya_tambahan" class="form-control" value="{{ old('biaya_tambahan', 0) }}" oninput="calculateTotal()">
                <span class="text-danger">{{ $errors->first('biaya_tambahan') }}</span>
            </div>
            <div class="form-group">
                <label for="total_biaya">Total Biaya</label>
                <input type="text" name="total_biaya" id="total_biaya" class="form-control" value="{{ old('total_biaya', 0) }}" readonly>
            </div>
            <button type="submit" class="btn btn-primary">SIMPAN</button>
        </form>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const poliSelect = document.getElementById('poli_id');
                const obatSelect = document.getElementById('obat_id');
                const biayaTambahanInput = document.getElementById('biaya_tambahan');
                const totalBiayaInput = document.getElementById('total_biaya');

                function calculateTotal() {
                    const selectedPoli = poliSelect.options[poliSelect.selectedIndex];
                    const biayaPoli = parseFloat(selectedPoli.getAttribute('data-biaya')) || 0;

                    const selectedObat = obatSelect.options[obatSelect.selectedIndex];
                    const hargaObat = parseFloat(selectedObat.getAttribute('data-harga_jual')) || 0;

                    const biayaTambahan = parseFloat(biayaTambahanInput.value) || 0;
                    const totalBiaya = biayaPoli + hargaObat + biayaTambahan;

                    totalBiayaInput.value = totalBiaya.toFixed(2);
                }

                poliSelect.addEventListener('change', calculateTotal);
                obatSelect.addEventListener('change', calculateTotal);
                biayaTambahanInput.addEventListener('input', calculateTotal);

                // Initial calculation on page load if a poli is selected
                calculateTotal();
            });


        </script>


    </div>
</div>
@endsection
