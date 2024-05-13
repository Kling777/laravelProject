@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <h3>Tambah Data Fasilitas</h3>
        </div>
        <div class="row mt-3">
            <form method="POST" action="{{route('facilities.store')}}">
                @csrf
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <td>Nama Fasilitas</td>
                            <td>
                                <input autocomplete="off" class="form-control" type="text"
                                    name="name">
                            </td>
                        </tr>
                        <tr>
                            <td>Banyak Fasilitas</td>
                            <td>
                                <input autocomplete="off" class="form-control" type="text"
                                    name="qty">
                            </td>
                        </tr>
                        <tr>
                            <td>Info Tambahan</td>
                            <td>
                                <input autocomplete="off" class="form-control" type="text"
                                    name="info">
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