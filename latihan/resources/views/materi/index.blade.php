@extends('latihanLayout.master')

@section('content')
    <div class="container mt-4">
        <h3>Daftar Materi</h3>

        <a href="#" class="btn btn-primary mb-3">+ Tambah Materi</a>

        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Pengenalan Laravel</td>
                    <td>Materi dasar tentang framework Laravel</td>
                    <td>
                        <center>
                            <a href="/materi/1" class="btn btn-info btn-sm">Detail</a>
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Hapus data ini?')">Hapus</button>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Routing Laravel</td>
                    <td>Membahas penggunaan route dan controller</td>
                    <td>
                        <center>
                            <a href="/materi/2" class="btn btn-info btn-sm">Detail</a>
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Hapus data ini?')">Hapus</button>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Template</td>
                    <td>Contoh Template</td>
                    <td>
                        <center>
                            <a href="/materi/3" class="btn btn-info btn-sm">Detail</a>
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Hapus data ini?')">Hapus</button>
                        </center>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection