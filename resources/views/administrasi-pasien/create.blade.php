@extends('app')

@section('content')
    <div class="p-5">
        <h1 class="text-2xl">Proses Administrasi Pasien</h1>
    </div>

    <div class="flex justify-center">
        <form action="{{ url('/administrasi/proses', $pasien->id) }}" method="post" class="w-96">
            @csrf
            <label class="form-control">
                <div class="label">
                    <span class="label-text">Tindakan Medis yang dilakukan</span>
                </div>
                <select name="tindakan_medis_id" id="" class="select select-bordered">
                    @foreach($semua_tindakan_medis as $item)
                    <option value="{{ $item->id }}">{{ "$item->kode | $item->tindakan_medis" }}</option>
                    @endforeach
                </select>
            </label>
            <label class="form-control">
                <div class="label">
                    <span class="label-text">Obat yang Dibutuhkan</span>
                </div>
                <select name="obat_id" id="" class="select select-bordered">
                    @foreach($semua_obat as $item)
                    <option value="{{ $item->id }}">{{ "$item->kode | $item->nama" }}</option>
                    @endforeach
                </select>
            </label>
            <label class="form-control">
                <div class="label">
                    <span class="label-text">Pegawai yang Menangani</span>
                </div>
                <select name="pegawai_id" id="" class="select select-bordered">
                    @foreach($semua_pegawai as $item)
                    <option value="{{ $item->id }}">{{ "$item->kode | $item->nama" }}</option>
                    @endforeach
                </select>
            </label>
            <div class="form-control">
                <button type="submit" class="btn btn-primary">Proses</button>
            </div>
        </form>
    </div>
@endsection