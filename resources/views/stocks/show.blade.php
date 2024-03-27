@extends('component.layout')

@section('content')
<h1>Detail Stok Dapur</h1>

<table class="table">
    <tbody>
        <tr>
            <th>Nama</th>
            <td>{{ $stock->name }}</td>
        </tr>
        <tr>
            <th>Stok</th>
            <td>{{ $stock->stock }}</td>
        </tr>
        <tr>
            <th>Deskripsi</th>
            <td>{{ $stock->description }}</td>
        </tr>
    </tbody>
</table>
<form action="{{ route('stocks.destroy', $stock) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
</form>

@endsection
