@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <h3>Data Siswa</h3>
    </div>
    <div class="row mb-3">
        <div class="col-md-3">
            <a href="{{ route('students.create') }}" class="btn btn-primary">Tambah Siswa</a>
        </div>

    </div>

    <div class="row mt-3">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NIS</th>
                    <th>Kelas</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr>
                        <td> {{ $loop->iteration }}</td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->nis }}</td>
                        <td>{{ $student->class }}</td>
                        <td>
                            <form method="POST" action="{{ route('students.destroy', $student->id) }}">
                                @method('DELETE')
                                @csrf
                                <a class="btn btn-warning" href="{{ route('students.edit', $student->id) }}">Edit</a>
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