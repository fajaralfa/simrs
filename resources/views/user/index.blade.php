@extends('app')

@section('title', 'Pegawai')

@section('content')
<div class="p-5">
    <h1 class="text-2xl">User</h1>
    <a href="{{ url('/user/create') }}" class="btn btn-xs btn-success text-white">Tambah User</a>
</div>
<div class="overflow-x-auto">
  <table class="table table-zebra table-xs">
    <thead>
      <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($all_user as $item)
            <tr>
                <td>{{ $item->name }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->role }}</td>
                <td>
                    <a href="{{ url('/user', [$item->id, 'edit']) }}" class="btn btn-accent btn-xs">^</a>
                    <form action="{{ url('/user', $item->id) }}" method="post" class="inline" onclick="return confirm('Hapus data ini?')">
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