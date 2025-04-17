@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Mekanik</h2>

    <form action="{{ route('service.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label>Nama Mekanik:</label>
            <input type="text" name="mekanik" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Tanggal Lahir:</label>
            <input type="date" name="tgl_lahir" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Alamat:</label>
            <input type="text" name="alamat" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>NIK:</label>
            <input type="text" name="nik" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>No HP:</label>
            <input type="text" name="no_hp" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
