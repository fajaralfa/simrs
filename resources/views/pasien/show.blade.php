@extends('app')

@section('content')

<ul>
<li>{{ $pasien->kode }}</li>
<li>{{ $pasien->nama }}</li>

@if ($pasien->administrasi_pasien)
<li>{{ var_dump($pasien->administrasi_pasien) }}</li>
@else
<a href="{{ url('/administrasi/proses', $pasien->id) }}" class="btn btn-primary">Proses Pasien</a>
@endif
</ul>

@endsection