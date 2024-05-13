@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <h3>Edit Data Fasilitas</h3>
        </div>
        <div class="row mt-3">
            <form method="POST" action="{{route('facilities.update', $facilities->id) }}">
                @csrf
                @method('PATCH')
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <td>Nama Fasilitas</td>
                            <td>
                                <input autocomplete="off" value="{{ $facilities->name }}" class="form-control" type="text"
                                    name="name">
                            </td>
                        </tr>
                        <tr>
                            <td>Banyak Fasilitas</td>
                            <td>
                                <input autocomplete="off" value="{{ $facilities->qty }}" class="form-control" type="text"
                                    name="qty">
                            </td>
                        </tr>
                        <tr>
                            <td>Info Tambahan</td>
                            <td>
                                <input autocomplete="off" value="{{ $facilities->info }}" class="form-control" type="text"
                                    name="info">
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