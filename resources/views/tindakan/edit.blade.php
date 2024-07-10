@extends('app')

@section('content')
    <div class="p-5">
        <h1 class="text-2xl">Tindakan Medis</h1>
    </div>
    <div class="flex justify-center">
        <form action="{{ url('/tindakan', $tindakan->id) }}" method="post" class="w-96">
            @csrf @method('PUT')
            <label class="form-control">
                <div class="label">
                    <span class="label-text">Kode</span>
                </div>
                <input type="text" name="kode" id="" class="input input-bordered" value="{{ $tindakan->kode }}">
            </label>
            <label class="form-control">
                <div class="label">
                    <span class="label-text">Tindakan Medis</span>
                </div>
                <input type="text" name="tindakan_medis" id="" class="input input-bordered" value="{{ $tindakan->tindakan_medis }}">
            </label>
            <label class="form-control">
                <div class="label">
                    <span class="label-text">Biaya</span>
                </div>
                <input type="text" name="biaya" id="" class="input input-bordered" value="{{ $tindakan->biaya }}">
            </label>
            <div class="form-control">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
@endsection