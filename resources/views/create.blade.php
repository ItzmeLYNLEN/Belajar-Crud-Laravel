@extends('layouts.default')

@section('content')
<section>
    <div class="container mt-5">
        <h1 class="text-center">Tambah Data Siswa</h1>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <form action="{{url('/store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama Siswa</label>
                        <input type="text" name="nama" class="form-control" value="{{ old('nama') }}" placeholder="Nama Siswa">
                        @error('nama')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="nama">NIS</label>
                        <input type="number" name="nis" class="form-control" value="{{ old('nis') }}" placeholder="213453">
                        @error('nis')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="nama">Alamat</label>
                        <textarea name="alamat" class="form-control" cols="30" rows="10"  placeholder="Bogor">{{ old('alamat') }}</textarea>
                        @error('alamat')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mt-2">
                        <button type="submit" class="btn btn-primary">Tambah Siswa</button>
                    </div>
                    <div class="form-group mt-2">
                        <a href="/">
                            << Kembali ke halaman utama</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection