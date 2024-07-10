@extends('app')

@section('content')
    <div class="p-5">
        <h1 class="text-2xl">Pegawai</h1>
    </div>
    <div class="flex justify-center">
        <form action="{{ url('/pegawai') }}" method="post" class="w-96">
            @csrf
            <label class="form-control">
                <div class="label">
                    <span class="label-text">Unit Kerja</span>
                </div>
                <select name="unit_kerja_id" id="" class="select select-bordered">
                    @foreach($unit_kerja as $u)
                    <option value="{{ $u->id }}">{{ $u->nama }}</option>
                    @endforeach
                </select>
            </label>
            <label class="form-control">
                <div class="label">
                    <span class="label-text">Kode Pegawai</span>
                </div>
                <input type="text" name="kode" id="" class="input input-bordered">
            </label>
            <label class="form-control">
                <div class="label">
                    <span class="label-text">Nama Pegawai</span>
                </div>
                <input type="text" name="nama" id="" class="input input-bordered">
            </label>
            <div class="form-control">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
@endsection