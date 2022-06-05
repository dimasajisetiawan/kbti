@extends('layouts.main')
@section('container')
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Halo</h3>
                    <div class="card-tools">

                        {{-- <a href="/daftar_level_satu"><button type="button" class="btn btn-sm btn-primary">
                            <i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp Daftar Level Satu</button></a>
                        <a href="/daftar_level_dua"><button type="button" class="btn btn-sm btn-primary">
                            <i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp Daftar Level Dua</button></a>
                        <a href="/daftar_level_tiga"><button type="button" class="btn btn-sm btn-primary">
                            <i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp Daftar Level Tiga</button></a> --}}
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <p>Selamat Datang di Aplikasi Sistem Pendukung Keputusan Pemilihan Smartphone</p>
                        <p>Dengan Metode Simple Additive Weighting (SAW) Berbasis WEB</p>
                    {{-- <table class="table table-bordered"> --}}
                        {{-- <thead> --}}
                            {{-- <tr>
                                <th scope="col">Kode Akun</th>
                                <th scope="col">Nama Reff</th>
                            </tr> --}}
                        {{-- </thead> --}}
                        {{-- <tbody> --}}
                            {{-- @foreach ($akn as $akun)
                            <tr>

                                        <td>{{ $akun->kode_akun }}</td>
                                        <td>{{ $akun->nama_reff }}</td>
                            </tr>
                            @endforeach --}}

                        {{-- </tbody> --}}
                    {{-- </table> --}}
                </div>
                <!-- /.card-body -->
                {{-- <div class="card-footer clearfix"> --}}
                    {{-- <ul class="pagination pagination-sm m-0 float-right">
                        {{ $surat->onEachSide(1)->links() }}
                    </ul> --}}
                {{-- </div> --}}

            </div>
            {{-- <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Daftar Pengguna</h4>
                    <div class="card-tools">

                        <a href="/tambah_pengguna"><button type="button" class="btn btn-sm btn-primary">
                            <i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp Tambah Pengguna</button></a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Email</th>
                                <th scope="col">Level</th>
                                <th scope="col">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @foreach ($usr as $pengguna)
                                    <td>{{ ($usr->currentPage() - 1) * $usr->perPage() + $loop->iteration }}</td>
                                    <td>{{ $pengguna->nama }}</td>
                                    <td>{{ $pengguna->email }}</td>
                                    @if ($pengguna->role_users == 1)
                                        <td>Admin</td>
                                    @elseif($pengguna->role_users == 2)
                                        <td>Bendahara</td>
                                    @else
                                        <td>Pemantau</td>
                                    @endif
                                    <td>
                                        <a class="btn btn-app bg-info "
                                            href="
                                            /dashboard/admin/lihat_surat/">
                                            <i class="fas fa-cog"></i> Ubah
                                        </a>
                                        <form action="/dashboard/hapusSurat/{{ $pengguna->id }}" method="POST"
                                            class="d-inline">
                                            @csrf
                                            <input name="_method" type="hidden" value="DELETE">
                                            <button type="submit"
                                                class="btn btn-app bg-danger border-0"onclick="return confirm('Are You Sure?')" ><i
                                                    class="fas fa-ban"></i>Delete</button>
                                        </form>
                                    </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                    <ul class="pagination pagination-sm m-0 float-right">
                        {{ $usr->onEachSide(1)->links() }}
                    </ul>
                </div>

            </div>
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Daftar Transaksi</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">No Reff</th>
                                <th scope="col">Nama Reff</th>
                                <th scope="col">Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>

                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div> --}}
                <!-- /.card-body -->
                {{-- <div class="card-footer clearfix"> --}}
                    {{-- <ul class="pagination pagination-sm m-0 float-right">
                        {{ $surat->onEachSide(1)->links() }}
                    </ul> --}}
                {{-- </div> --}}

            </div>
            <!-- /.row -->
            <!-- Main row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
