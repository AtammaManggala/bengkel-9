@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Mekanik</h2>

    <form action="{{ route('service.update', $service->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Nama Mekanik:</label>
            <input type="text" name="mekanik" class="form-control" value="{{ $service->mekanik }}" required>
        </div>

        <div class="mb-3">
            <label>Tanggal Lahir:</label>
            <input type="date" name="tgl_lahir" class="form-control" value="{{ $service->tgl_lahir }}" required>
        </div>

        <div class="mb-3">
            <label>Alamat:</label>
            <input type="text" name="alamat" class="form-control" value="{{ $service->alamat }}" required>
        </div>

        <div class="mb-3">
            <label>NIK:</label>
            <input type="text" name="nik" class="form-control" value="{{ $service->nik }}" required>
        </div>

        <div class="mb-3">
            <label>No HP:</label>
            <input type="text" name="no_hp" class="form-control" value="{{ $service->no_hp }}" required>
        </div>

        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
@endsection
