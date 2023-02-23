@extends('layouts.default')

@section('content')
<section>
    <div class="container mt-5 text-center">
        <h1>Data Siswa</h1>
        <a href="create" class="btn btn-primary">+ Tambah Siswa</a>

        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card shadow">
                        <div class="card-body">
                            <table class="table table-hover">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>NIS</th>
                                <th>alamat</th>
                                <th>Action</th>
                            </tr>
                            @foreach ($data as $dataSiswa)
                            <tr>
                                <td>{{ $dataSiswa->id }}</td>
                                <td>{{ $dataSiswa->nama }}</td>
                                <td>{{ $dataSiswa->nis }}</td>
                                <td>{{ $dataSiswa->alamat }}</td>
                                <td>
                                    <a href="{{url('/show/'.$dataSiswa->id)}}" class="btn btn-warning">Edit</a>
                                    <a href="{{url('/destroy/'.$dataSiswa->id)}}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

