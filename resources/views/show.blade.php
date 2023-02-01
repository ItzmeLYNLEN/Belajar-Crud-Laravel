@extends('layouts.default')

@section('content')
    <section>
        <div class="container mt-5">
            <h1 class="text-center">Edit Data Siswa</h1>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <form action="{{url('/update/'.$data->id)}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama Siswa</label>
                            <input type="text" name="nama" class="form-control" placeholder="Nama Siswa" value="{{$data->nama}}">
                        </div>
                        <div class="form-group">
                            <label for="nama">NIS</label>
                            <input type="number" name="nis" class="form-control" placeholder="213453" value="{{$data->nis}}">
                        </div>
                        <div class="form-group">
                            <label for="nama">Alamat</label>
                            <textarea name="alamat" class="form-control" cols="30" rows="10" placeholder="Bogor">{{$data->alamat}}</textarea>
                        </div>
                        <div class="form-group mt-2">
                            <button type="submit" class="btn btn-primary">Tambah Siswa</button>
                        </div>
                        <div class="form-group mt-2">
                            <a href="{{url('/')}}"><< Kembali ke halaman utama</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection