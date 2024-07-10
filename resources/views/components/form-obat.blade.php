@props(['action', 'obat' => null, 'submit' => 'Tambah', 'method' => 'POST'])

<form action="{{ $action }}" method="post" class="w-96">
    @csrf @method($method)
    <label class="form-control">
        <div class="label">
            <span class="label-text">Kode Obat</span>
        </div>
        <input type="text" name="kode" id="" value="{{ $obat?->kode }}" class="input input-bordered" @if ($method == 'PUT') disabled @endif>
    </label>
    <label class="form-control">
        <div class="label">
            <span class="label-text">Nama Obat</span>
        </div>
        <input type="text" name="nama" id="" value="{{ $obat?->nama }}" class="input input-bordered">
    </label>
    <label class="form-control">
        <div class="label">
            <span class="label-text">Harga Obat</span>
        </div>
        <input type="number" name="biaya" id="" value="{{ $obat?->biaya }}" class="input input-bordered">
    </label>
    <div class="form-control">
        <button type="submit" class="btn btn-primary">{{ $submit }}</button>
    </div>
</form>