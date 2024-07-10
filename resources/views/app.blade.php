<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SIMRS - @yield('title', 'App')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="min-h-screen bg-white">
        @section('sidebar')
        <div class="w-56 h-full fixed bg-primary flex flex-col">
            <button class="btn btn-primary text-2xl">{{ getenv('APP_NAME') }}</button>
            <a href="{{ url('/daftarkan-pasien') }}" class="btn btn-tertiary !justify-start !rounded-none">Daftarkan Pasien</a>
            <a href="{{ url('/pasien') }}" class="btn btn-tertiary !justify-start !rounded-none">Daftar Pasien</a>
            <a href="{{ url('/administrasi') }}" class="btn btn-tertiary !justify-start !rounded-none">Administrasi Pasien</a>
            <a href="{{ url('/tindakan') }}" class="btn btn-primary !justify-start !rounded-none">Tindakan</a>
            <a href="{{ url('/obat') }}" class="btn btn-primary !justify-start !rounded-none">Obat</a>
            <a href="{{ url('/user') }}" class="btn btn-primary !justify-start !rounded-none">User</a>
            <a href="{{ url('/pegawai') }}" class="btn btn-primary !justify-start !rounded-none">Pegawai</a>
            <a href="{{ url('/master-wilayah') }}" class="btn btn-primary !justify-start !rounded-none">Master Wilayah</a>
        </div>
        @show
        <div class="ml-56">
            @yield('content')
        </div>
    </div>
</body>
</html>