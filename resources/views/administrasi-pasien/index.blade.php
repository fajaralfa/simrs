@extends('app')

@section('content')
<h1 class="text-2xl p-5">Administrasi</h1>
<div class="overflow-x-auto">
  <table class="table table-zebra table-xs">
    <thead>
      <tr>
        <th>Nama Pasien</th>
        <th>Tindakan Medis yang Dilakukan</th>
        <th>Obat</th>
        <th>Pegawai yang Menangani</th>
        <th>Total Biaya</th>
        <th>Status Pembayaran</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($semua_administrasi_pasien as $item)
            <tr>
                <td>{{ $item->pasien->nama }}</td>
                <td>@foreach ($item->tindakan_medis as $t) {{ "$t->tindakan_medis," }} @endforeach</td>
                <td>@foreach ($item->obat as $o) {{ "$o->nama," }} @endforeach</td>
                <td>@foreach ($item->pegawai as $p) {{ "$p->nama," }} @endforeach</td>
                <td>{{ $item->formatted_total_biaya() }}</td>
                <td>{{ $item->status_pembayaran }}</td>
            </tr>
        @endforeach
    </tbody>
  </table>
</div>
@endsection