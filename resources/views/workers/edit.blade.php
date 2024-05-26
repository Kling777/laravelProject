@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <h3>Edit Data Pekerja</h3>
        </div>
        <div class="row mt-3">
            <form method="POST" action="{{route('workers.update', $workers->id) }}">
                @csrf
                @method('PATCH')
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <td>Nama</td>
                            <td>
                                <input autocomplete="off" value="{{ $workers->name }}" class="form-control" type="text"
                                    name="name">
                            </td>
                        </tr>
                        <tr>
                            <td>Umur</td>
                            <td>
                                <input autocomplete="off" value="{{ $workers->umur }}" class="form-control" type="text"
                                    name="umur">
                            </td>
                        </tr>
                        <tr>
                            <td>NIK</td>
                            <td>
                                <input autocomplete="off" value="{{ $workers->nik }}" class="form-control" type="text"
                                    name="nik">
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <button class="btn btn-success" type="submit">Update</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>
    </div>
@endsection