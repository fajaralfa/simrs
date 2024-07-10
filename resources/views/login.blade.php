@extends('core')

@section('title', 'Login')

@section('content')

<div class="h-screen flex justify-center items-center">
    <div class="card w-96">
        <div class="card-body">
            <h2 class="text-2xl bold text-center py-4">{{ getenv('APP_NAME') }}</h2>
            <form action="/admin/login" method="post" class="form-control gap-3">
                @csrf
                <input type="text" name="email" id="" class="input input-bordered">
                <input type="password" name="password" id="" class="input input-bordered">
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>
</div>

@endsection