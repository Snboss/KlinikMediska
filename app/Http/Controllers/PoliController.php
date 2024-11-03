<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Poli;
use App\Models\Dokter;
use App\Models\Jadwal;

class PoliController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['poli'] = Poli::with('dokter', 'jadwals')->latest()->paginate(10);
        $data['judul'] = 'Data-data Poli';
        return view('poli_index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['poli'] = new Poli();
        $data['judul'] = 'Tambah Data';
        $data['list_dokter'] = Dokter::get();
        return view('poli_create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasiData = $request->validate([
            'nama' => 'required|unique:polis',
            'dokter_id' => 'required',
            'biaya' => 'required|numeric',
            'deskripsi' => 'required',
            'jadwal.*.hari' => 'required',
            'jadwal.*.jam_mulai' => 'required',
            'jadwal.*.jam_selesai' => 'required'
        ]);

        $poliData = $validasiData;
        unset($poliData['jadwal']); // Remove jadwal data from poli data

        $poli = Poli::create($poliData);

        foreach ($request->jadwal as $jadwalData) {
            $jadwal = new Jadwal($jadwalData);
            $poli->jadwals()->save($jadwal);
        }

        flash('Data berhasil disimpan');
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data['poli'] = Poli::with('jadwals')->findOrFail($id);
        $data['judul'] = 'Ubah Data';
        $data['list_dokter'] = Dokter::get();
        return view('poli_edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validasiData = $request->validate([
            'nama' => 'required|unique:polis,nama,' . $id,
            'dokter_id' => 'required',
            'biaya' => 'required|numeric',
            'deskripsi' => 'required',
            'jadwal.*.hari' => 'required',
            'jadwal.*.jam_mulai' => 'required',
            'jadwal.*.jam_selesai' => 'required'
        ]);

        $poliData = $validasiData;
        unset($poliData['jadwal']); // Remove jadwal data from poli data

        $poli = Poli::findOrFail($id);
        $poli->fill($poliData);
        $poli->save();

        $poli->jadwals()->delete();

        foreach ($request->jadwal as $jadwalData) {
            $jadwal = new Jadwal($jadwalData);
            $poli->jadwals()->save($jadwal);
        }

        flash('Data berhasil diubah');
        return redirect('poli');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $poli = Poli::findOrFail($id);
        $poli->delete();
        flash('Data berhasil dihapus');
        return back();
    }
}
