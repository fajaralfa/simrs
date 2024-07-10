<?php

namespace App\Http\Controllers;

use App\Models\AdministrasiPasien;
use App\Models\Obat;
use App\Models\ObatYangDibutuhkan;
use App\Models\Pasien;
use App\Models\Pegawai;
use App\Models\TindakanMedis;
use Illuminate\Http\Request;

class AdministrasiPasienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('administrasi-pasien.index', [
            'semua_administrasi_pasien' => AdministrasiPasien::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $pasienId)
    {
        $pasien = Pasien::find($pasienId);

        return view('administrasi-pasien.create', [
            'pasien' => $pasien,
            'semua_tindakan_medis' => TindakanMedis::all(),
            'semua_obat' => Obat::all(),
            'semua_pegawai' => Pegawai::all(),
        ]);
    }

    /**
     * Sementara hanya bisa menginsert satu data
     */
    public function store(Request $request, string $pasienId)
    {
        $administrasi = AdministrasiPasien::create([
            'pasien_id' => $pasienId,
            'user_id' => 1,
            'total_biaya' => 0,
            'status_pembayaran' => 'belum',
        ]);

        $administrasi->tindakan_medis()->attach($request->post('tindakan_medis_id'));
        $administrasi->obat()->attach($request->post('obat_id'));
        $administrasi->pegawai()->attach($request->post('pegawai_id'));

        $total_biaya_tindakan = 0;
        foreach ($administrasi->tindakan_medis as $item) {
            $total_biaya_tindakan += $item->biaya;
        }

        $total_biaya_obat = 0;
        foreach ($administrasi->obat as $item) {
            $total_biaya_obat += $item->biaya;
        }

        $total_biaya_pegawai = 0;
        foreach ($administrasi->pegawai as $item) {
            $total_biaya_obat += $item->biaya;
        }

        $administrasi->total_biaya = $total_biaya_tindakan + $total_biaya_obat + $total_biaya_pegawai;

        $administrasi->save();

        return redirect(url('/administrasi', $administrasi->id));
    }

    /**
     * Display the specified resource.
     */
    public function show(AdministrasiPasien $administrasiPasien)
    {
        return $administrasiPasien;
    }

}
