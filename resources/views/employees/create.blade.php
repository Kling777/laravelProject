@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <h3>Tambah Data Karyawan</h3>
        </div>
        <div class="row mt-3">
            <form method="POST" action="{{route('employees.store')}}">
                @csrf
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <td>Nama</td>
                            <td>
                                <input autocomplete="off" class="form-control" type="text"
                                    name="name">
                            </td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>
                                <input autocomplete="off" class="form-control" type="text"
                                    name="alamat">
                            </td>
                        </tr>
                        <tr>
                            <td>NoHp</td>
                            <td>
                                <input autocomplete="off" class="form-control" type="text"
                                    name="noHp">
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <button class="btn btn-success" type="submit">Submit</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>
    </div>
@endsection