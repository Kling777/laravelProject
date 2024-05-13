@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <h3>Category</h3>
    </div>
    <div class="row mb-3">
        <div class="col-md-3">
            <a href="{{ route('industries.create') }}" class="btn btn-primary">Add Category</a>
        </div>

    </div>

    <div class="row mt-3">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Perusahaan</th>
                    <th>Alamat</th>
                    <th>Nama Pimpinan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($industries as $industry)
                    <tr>
                        <td> {{ $loop->iteration }}</td>
                        <td>{{ $industry->company }}</td>
                        <td>{{ $industry->address }}</td>
                        <td>{{ $industry->leader }}</td>
                        <td>
                            <form method="POST" action="{{ route('industries.destroy', $industry->id) }}">
                                @method('DELETE')
                                @csrf
                                <a class="btn btn-warning" href="{{ route('industries.edit', $industry->id) }}">Edit</a>
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