@extends('app')

@section('title', 'Edit Data Obat')

@section('content')

<h1 class="text-2xl p-5">Data Obat</h1>

<div class="flex justify-center">
    <x-form-obat :action="url('/obat', [$obat->id])" method="PUT" :obat="$obat" submit="UPDATE"></x-form-obat>
</div>

@endsection