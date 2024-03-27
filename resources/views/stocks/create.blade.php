@extends('component.layout')

@section('content')
<h1>Tambah Stok Dapur</h1>

<form action="{{ route('stocks.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Nama</label>
        <input type="text" class="form-control" id="name" name="name">
    </div>
    <div class="mb-3">
        <label for="stock" class="form-label">Jumlah</label>
        <input type="number" class="form-control" id="stock" name="stock">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Deskripsi</label>
        <input type="text" class="form-control" id="description" name="description">
