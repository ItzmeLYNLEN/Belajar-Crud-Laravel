@extends('layouts.default')

@section('content')
<section>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8">
                <h1>CRUD Dappa</h1>
                <a href="{{ url('create') }}" class="btn btn-primary">+ Tambah Siswa</a>
            </div>
            <div class="col-lg-8 mt-5">
                <table class="table-bordered">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>NIS</th>
                        <th>alamat</th>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection