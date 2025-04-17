@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Data Mekanik</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('service.create') }}" class="btn btn-primary mb-3">+ Tambah Mekanik</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Tanggal Lahir</th>
                <th>Alamat</th>
                <th>NIK</th>
                <th>No HP</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $item)
            <tr>
                <td>{{ $item->mekanik }}</td>
                <td>{{ $item->tgl_lahir }}</td>
                <td>{{ $item->alamat }}</td>
                <td>{{ $item->nik }}</td>
                <td>{{ $item->no_hp }}</td>
                <td>
                    <a href="{{ route('service.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
