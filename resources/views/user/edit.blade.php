@extends('app')

@section('content')
    <div class="p-5">
        <h1 class="text-2xl">Pegawai</h1>
    </div>
    <div class="flex justify-center">
        <form action="{{ url('/user', $user->id) }}" method="post" class="w-96">
            @csrf @method('PUT')
            <label class="form-control">
                <div class="label">
                    <span class="label-text">Name</span>
                </div>
                <input type="text" name="name" id="" class="input input-bordered" value="{{ $user->name }}">
            </label>
            <label class="form-control">
                <div class="label">
                    <span class="label-text">Email</span>
                </div>
                <input type="email" name="email" id="" class="input input-bordered" value="{{ $user->email }}">
            </label>
            <label class="form-control">
                <div class="label">
                    <span class="label-text">New Password</span>
                </div>
                <input type="password" name="password" id="" class="input input-bordered">
            </label>
            <label class="form-control">
                <div class="label">
                    <span class="label-text">Role</span>
                </div>
                <select name="role" id="" class="select select-bordered">
                    <option value="admin" @selected($user->role == 'admin')>Admin</option>
                    <option value="operator" @selected($user->role == 'operator')>Operator</option>
                </select>
            </label>
            <div class="form-control">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
@endsection