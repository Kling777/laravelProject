@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <h3>Edit Data Siswa</h3>
        </div>
        <div class="row mt-3">
            <form method="POST" action="{{route('students.update', $students->id) }}">
                @csrf
                @method('PATCH')
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <td>Nama</td>
                            <td>
                                <input autocomplete="off" value="{{ $students->name }}" class="form-control" type="text"
                                    name="name">
                            </td>
                        </tr>
                        <tr>
                            <td>NIS</td>
                            <td>
                                <input autocomplete="off" value="{{ $students->nis }}" class="form-control" type="text"
                                    name="nis">
                            </td>
                        </tr>
                        <tr>
                            <td>Kelas</td>
                            <td>
                                <input autocomplete="off" value="{{ $students->class }}" class="form-control" type="text"
                                    name="class">
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