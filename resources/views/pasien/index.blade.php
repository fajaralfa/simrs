@extends('app')

@section('title', 'Pegawai')

@section('content')
<div class="p-5">
    <h1 class="text-2xl">Pasien</h1>
    <a href="{{ url('/pasien/create') }}" class="btn btn-xs btn-success text-white">Daftarkan Pasien</a>
</div>
<div class="overflow-x-auto">
  <table class="table table-zebra table-xs">
    <thead>
      <tr>
            <th>Kode</th>
            <th>Nama</th>
            <th>Keluhan (todo)</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($semua_pasien as $item)
            <tr>
                <td>{{ $item->kode }}</td>
                <td>{{ $item->nama }}</td>
                <td></td>
                <td>
                    <a href="{{ url('/administrasi/proses', $item->id) }}" class="btn btn-primary btn-xs">Proses Pasien</a>
                    <a href="{{ url('/pasien/edit', $item->id) }}" class="btn btn-accent btn-xs">^</a>
                    <form action="{{ url('/pasien', $item->id) }}" method="post" class="inline" onclick="return confirm('Hapus data ini?')">
                        @csrf @method('DELETE')
                        <button class="btn btn-error btn-xs" type="submit">x</button>
                    </form>
                </td>
            </tr>
        @endforeach
        <tr>
        </tr>
    </tbody>
  </table>
</div>
@endsection