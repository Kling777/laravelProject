@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <h3>Edit Data Karyawan</h3>
        </div>
        <div class="row mt-3">
            <form method="POST" action="{{route('employees.update', $employees->id) }}">
                @csrf
                @method('PATCH')
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <td>Nama</td>
                            <td>
                                <input autocomplete="off" value="{{ $employees->name }}" class="form-control" type="text"
                                    name="name">
                            </td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>
                                <input autocomplete="off" value="{{ $employees->alamat }}" class="form-control" type="text"
                                    name="alamat">
                            </td>
                        </tr>
                        <tr>
                            <td>Nohp</td>
                            <td>
                                <input autocomplete="off" value="{{ $employees->noHp }}" class="form-control" type="text"
                                    name="noHp">
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