@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <h3>Edit Data Perusahaan</h3>
        </div>

        <div class="row mt-3">
            <form method="POST" action="{{route('industries.update', $industries->id) }}">
                @csrf
                @method('PATCH')
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <td>Nama Perusahaan</td>
                            <td>
                                <input autocomplete="off" value="{{ $industries->company }}" class="form-control" type="text"
                                    name="company">
                            </td>
                        </tr>
                        <tr>
                            <td>Alamat Perusahaan</td>
                            <td>
                                <input autocomplete="off" value="{{ $industries->address }}" class="form-control" type="text"
                                    name="address">
                            </td>
                        </tr>
                        <tr>
                            <td>Nama Pimpinan</td>
                            <td>
                                <input autocomplete="off" value="{{ $industries->leader }}" class="form-control" type="text"
                                    name="leader">
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