@extends('component.Layout')

@section('content')
<h1>Daftar Stok Dapur</h1>

<a href="{{ route('stocks.create') }}" class="btn btn-primary">Tambah Stok</a>

<table class="table">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Jumlah</th>
            <th>Satuan</th>
            <th>Tanggal Kedaluwarsa</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($stocks as $stock)
        <tr>
            <td>{{ $stock->name }}</td>
            <td>{{ $stock->quantity }}</td>
            <td>{{ $stock->unit }}</td>
            <td>{{ $stock->expiration_date }}</td>
            <td>
                <a href="{{ route('stocks.show', $stock) }}" class="btn btn-info">Lihat</a>
                <a href="{{ route('stocks.edit', $stock) }}" class="btn btn-warning">Ubah</a>
                <form action="{{ route('stocks.destroy', $stock) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
