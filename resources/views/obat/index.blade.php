@extends('app')

@section('title', 'Data Master Wilayah')

@section('content')
<div class="p-5 space-y-3">
  <h1 class="text-2xl">Data Obat</h1>
  <a href="{{ url('/obat/create') }}" class="btn btn-success text-white btn-sm">Tambah Data Obat</a>
</div>
<div class="overflow-x-auto">
  <table class="table table-zebra table-xs">
    <thead>
      <tr>
        <th>ID</th>
        <th>Kode Obat</th>
        <th>Nama Obat</th>
        <th>Harga</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($obat as $o)
            <tr>
                <td>{{ $o->id }}</td>
                <td>{{ $o->kode }}</td>
                <td>{{ $o->nama }}</td>
                <td>{{ $o->biaya }}</td>
                <td>
                    <a href="{{ url('/obat', [$o->id, 'edit']) }}" class="btn btn-accent btn-xs">^</a>
                    <form action="{{ url('/obat', $o->id) }}" method="post" class="inline" onclick="return confirm('Hapus data ini?')">
                        @csrf @method('DELETE')
                        <button class="btn btn-error btn-xs" type="submit">x</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
  </table>
</div>
@endsection