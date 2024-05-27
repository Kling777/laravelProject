@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <h3>Data Pekerja</h3>
    </div>
    <div class="row mb-3">
        <div class="col-md-3">
            <a href="{{ route('employees.create') }}" class="btn btn-primary">Tambah Pekerja</a>
        </div>

    </div>

    <div class="row mt-3">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>noHp</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($employees as $employee)
                    <tr>
                        <td> {{ $loop->iteration }}</td>
                        <td>{{ $employee->name }}</td>
                        <td>{{ $employee->alamat }}</td>
                        <td>{{ $employee->noHp }}</td>
                        <td>
                            <form method="POST" action="{{ route('employees.destroy', $employee->id) }}">
                                @method('DELETE')
                                @csrf
                                <a class="btn btn-warning" href="{{ route('employees.edit', $employee->id) }}">Edit</a>
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Apa anda yakin ingin menghapus data?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection