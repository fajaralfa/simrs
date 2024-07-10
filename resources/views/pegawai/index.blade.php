@extends('app')

@section('title', 'Pegawai')

@section('content')
<div class="p-5">
    <h1 class="text-2xl">Pegawai</h1>
    <a href="{{ url('/pegawai/create') }}" class="btn btn-xs btn-success text-white">Tambah Data Pegawai</a>
</div>
<div class="overflow-x-auto">
  <table class="table table-zebra table-xs">
    <thead>
      <tr>
            <th>Kode</th>
            <th>Nama Pegawai</th>
            <th>Unit Kerja</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($pegawai as $p)
            <tr>
                <td>{{ $p->kode }}</td>
                <td>{{ $p->nama }}</td>
                <td>{{ $p->unit_kerja->nama }}</td>
                <td>
                    <a href="{{ url('/pegawai', [$p->id, 'edit']) }}" class="btn btn-accent btn-xs">^</a>
                    <form action="{{ url('/pegawai', $p->id) }}" method="post" class="inline" onclick="return confirm('Hapus data ini?')">
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