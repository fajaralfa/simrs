@extends('app')

@section('title', 'Pegawai')

@section('content')
<div class="p-5">
    <h1 class="text-2xl">Tindakan Medis</h1>
    <a href="{{ url('/tindakan/create') }}" class="btn btn-xs btn-success text-white">Buat Tindakan Medis</a>
</div>
<div class="overflow-x-auto">
  <table class="table table-zebra table-xs">
    <thead>
      <tr>
            <th>Kode</th>
            <th>Tindakan Medis</th>
            <th>Biaya</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($semua_tindakan_medis as $item)
            <tr>
                <td>{{ $item->kode }}</td>
                <td>{{ $item->tindakan_medis }}</td>
                <td>{{ $item->biaya }}</td>
                <td>
                    <a href="{{ url('/tindakan', [$item->id, 'edit']) }}" class="btn btn-accent btn-xs">^</a>
                    <form action="{{ url('/tindakan', $item->id) }}" method="post" class="inline" onclick="return confirm('Hapus data ini?')">
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