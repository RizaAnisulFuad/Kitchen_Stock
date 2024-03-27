@extends('component.layout')

@section('content')
<h1>Ubah Stok Dapur</h1>

<form action="{{ route('stocks.update', $stock) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="name" class="form-label">Nama</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ $stock->name }}">
    </div>
    <div class="mb-3">
        <label for="quantity" class="form-label">Jumlah</label>
        <input type="number" class="form-control" id="quantity" name="quantity" value="{{ $stock->quantity }}">
    </div>
    <div class="mb-3">
        <label for="unit" class="form-label">Satuan</label>
        <input type="text" class="form-control" id="unit" name="unit" value="{{ $stock->unit }}">
    </div>
    <div class="mb-3">
        <label for="expiration_date" class="form-label">Tanggal Kedaluwarsa</label>
        <input type="date" class="form-control" id="expiration_date" name="expiration_date" value="{{ $stock->expiration_date }}">
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection
