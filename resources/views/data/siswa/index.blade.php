@extends('layouts.app')

@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page"> Data Siswa</li> 
               </ol>
             </nav>
        <div class="row mb-3" style="margin-top: -70px">
            <div class="col-md-12">
                <div class="card border-0">
                    <div class="card-body">
                        <div class="mb-3">
                            <a href="{{route('tambah-data.siswa')}}" class="btn btn-info">Tambah Siswa</a>
                        </div>
                        <form action="" method="post">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <input type="date" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <input type="date" class="form-control">
                                    </div>
                                </div>
                                <div>
                                    <button class="btn btn-info" type="submit">Cari Data Siswa</button>
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
            <div class="col-md-12">
                <div class="card border-0">
                    <div class="card-body">
                        <div class="mt-3">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>NISN</th>
                                        <th>Nama Siswa</th>
                                        <th>Kelas</th>
                                        <th>Jurusan</th>
                                        <th>Status</th>
                                        <th>Option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($students as $student)
                                    <tr>
                                        <td>{{$student->students->first()->nisn ?? 'Belum tersedia'}}</td>
                                        <td>{{$student->name}}</td>
                                        <td>{{$student->students->first()->class ?? 'Belum tersedia'}}</td>
                                        <td>{{$student->students->first()->major ?? 'Belum tersedia'}}</td>
                                        <td>{{$student->students->first()->status ?? 'Belum tersedia'}}</td>
                                        <td>
                                            <form action="{{route('destroy.data.siswa', $student->id)}}"  method="post">
                                                @csrf
                                                @method('DELETE')
                                                <a href="{{route('edit-data.siswa', $student->id)}}" class="btn btn-outline-warning btn-sm">Edit</a>
                                                <button type="submit" class="btn btn-outline-danger btn-sm">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                </tbody>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection