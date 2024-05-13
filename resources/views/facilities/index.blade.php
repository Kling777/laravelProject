@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <h3>Facility</h3>
    </div>
    <div class="row mb-3">
        <div class="col-md-3">
            <a href="{{ route('facilities.create') }}" class="btn btn-primary">Add Facility</a>
        </div>
    </div>
    <div class="row mt-3">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Jumlah</th>
                    <th>Info</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($facilities as $facility)
                <tr>
                    <td> {{ $loop->iteration }}</td>
                    <td>{{ $facility->name }}</td>
                    <td>{{ $facility->qty }}</td>
                    <td>
                        {{ $facility->info }}
                        @empty( $facility->info )
                        -
                        @endempty
                    </td>
                    <td>
                        <form method="POST" action="{{ route('facilities.destroy', $facility->id) }}">
                            @method('DELETE')
                            @csrf
                            <a class="btn btn-warning" href="{{ route('facilities.edit', $facility->id) }}">Edit</a>
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