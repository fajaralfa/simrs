@extends('app')

@section('content')
    <div class="p-5">
        <h1 class="text-2xl">Ubah Data Pasien</h1>
    </div>
    <div class="flex justify-center">
        <form action="{{ url('/pasien', $pasien->id) }}" method="post" class="w-96">
            @csrf @method('PUT')
            <label class="form-control">
                <div class="label">
                    <span class="label-text">Kode</span>
                </div>
                <input type="text" name="kode" id="" class="input input-bordered" value="{{ $pasien->kode }}">
            </label>
            <label class="form-control">
                <div class="label">
                    <span class="label-text">Nama</span>
                </div>
                <input type="text" name="nama" id="" class="input input-bordered" value="{{ $pasien->nama }}">
            </label>
            <div class="form-control">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
@endsection