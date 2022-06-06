@extends('layouts.main')
@section('container')
    <section class="content">
        <div class="container-fluid">
            @foreach ($data as $datas)
            <div class="col-xl-12">
                <div class="card card-info card-outline shadow">
                    <div class="card-header">
                        <div class="container-fluid">
                        <h3 class="card-title">{{ $datas->kelas->matakuliah->kode_mk }}  {{ $datas->kelas->matakuliah->nama }}</h3>
                    </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>Bobot</td>
                                    <td>{{ $datas->kelas->matakuliah->sks }} sks</td>
                                </tr>
                                <tr>
                                    <td>Pengajar</td>
                                    <td>{{ $datas->kelas->user->nama }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-xl-12">
            <div class="card card-info card-outline shadow">
                <div class="card-header ">
                    <div class="container-fluid">
                        <h3 class="card-title" style="inline-block">Daftar Tugas</h3>
                    </div>

                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive ">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                               <th>Kode Tugas</th>
                               <th>Mulai</th>
                               <th>Kumpul Sebelum</th>
                               <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @foreach ($datas->kelas->daftar_tugas->tugas as $items)
                                    <td>{{ $items->kode_tugas }}</td>
                                    <td>{{ $items->tanggal_mulai }}</td>
                                    <td>{{ $items->tanggal_selesai }}</td>
                                    <td>
                                        <a class="btn btn-info"
                                        href="dashboard/detail_tugas/{{ $items->kode_tugas }}"> Detail</a>
                                    </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        </div>
            @endforeach

            <!-- /.row -->
            <!-- Main row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
