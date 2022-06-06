@extends('layouts.main')
@section('container')
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Halo</h3>
                    <div class="card-tools">
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    @if (auth()->user()->role_users==0)
                        <p>Selamat Datang Dosen {{ auth()->user()->nama }} di Aplikasi Pengumpul Tugas</p>
                        <p>Dengan Framework Laravel</p>
                    @else
                    <p>Selamat Datang Mahasiswa {{ auth()->user()->nama }} di Aplikasi Pengumpul Tugas</p>
                    <p>Dengan Framework Laravel</p>
                    @endif
                </div>
            </div>
            <div class="row">
                @if (auth()->user()->role_users==0)
                @foreach ($data as $item)
                <div class="col-lg-3 col-6">
                  <!-- small box -->
                  <div class="small-box bg-info">
                    <div class="inner">
                      <h3>{{ $item->matakuliah->kode_mk }}</h3>

                      <p>{{ $item->matakuliah->nama }}</p>
                      <p>{{ $item->user->nama }}</p>
                      <p>{{ $item->hari }} {{ $item->jam }}</p>
                      <p>Sks {{ $item->matakuliah->sks }}</p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-bag"></i>
                    </div>
                    <a href="dashboard/daftar_kelas/{{ $item->kode_kelas }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                @endforeach
                @else
                @foreach ($data as $item)
                <div class="col-lg-3 col-6">
                  <!-- small box -->
                  <div class="small-box bg-info">
                    <div class="inner">
                      <h3>{{ $item->kelas->matakuliah->kode_mk }}</h3>

                      <p>{{ $item->kelas->matakuliah->nama }}</p>
                      <p>{{ $item->kelas->user->nama }}</p>
                      <p>{{ $item->kelas->hari }} {{ $item->kelas->jam }}</p>
                      <p>Sks {{ $item->kelas->matakuliah->sks }}</p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-bag"></i>
                    </div>
                    <a href="dashboard/kelas/{{ $item->kelas->kode_kelas }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                @endforeach
                @endif
                <!-- ./col -->
              </div>
            </div>
            <!-- /.row -->
            <!-- Main row -->
    </section>
    <!-- /.content -->
@endsection
