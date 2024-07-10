@extends('app')

@section('content')
    <div class="p-5">
        <h1 class="text-2xl">Pegawai</h1>
    </div>
    <div class="flex justify-center">
        <form action="{{ url('/user') }}" method="post" class="w-96">
            @csrf
            <label class="form-control">
                <div class="label">
                    <span class="label-text">Name</span>
                </div>
                <input type="text" name="name" id="" class="input input-bordered">
            </label>
            <label class="form-control">
                <div class="label">
                    <span class="label-text">Email</span>
                </div>
                <input type="email" name="email" id="" class="input input-bordered">
            </label>
            <label class="form-control">
                <div class="label">
                    <span class="label-text">password</span>
                </div>
                <input type="password" name="password" id="" class="input input-bordered">
            </label>
            <label class="form-control">
                <div class="label">
                    <span class="label-text">Role</span>
                </div>
                <select name="role" id="" class="select select-bordered">
                    <option value="admin">Admin</option>
                    <option value="operator">Operator</option>
                </select>
            </label>
            <div class="form-control">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
@endsection