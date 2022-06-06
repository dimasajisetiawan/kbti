@extends('layouts.main')
@section('container')
    <section class="content">
        <div class="container-fluid">
            @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif
        <div class="row p-3">
            <div class="col-xl-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Tugas</h3>
              </div>
              <form method="POST" action="/dashboard/tambah_kelas/{{ $id }}/{{ $kodemk }}">
                <div class="card-body">
                @csrf
                <div class="form-group">
                    <label>Kode tugas</label>
                        <input type="text" class="form-control" name="kode_tugas">
                </div>
                <div class="form-group">
                    <label>Tanggal Mulai</label>
                      <div class="input-group date" id="tanggalmulai" data-target-input="nearest">
                          <input type="text" class="form-control datetimepicker-input" data-target="#tanggalmulai" name="tanggal_mulai"/>
                          <div class="input-group-append" data-target="#tanggalmulai" data-toggle="datetimepicker">
                              <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                          </div>
                      </div>
                  </div>
                <div class="form-group">
                    <label>Tanggal Selesai</label>
                      <div class="input-group date" id="tanggalselesai" data-target-input="nearest">
                          <input type="text" class="form-control datetimepicker-input" data-target="#tanggalselesai" name="tanggal_selesai"/>
                          <div class="input-group-append" data-target="#tanggalselesai" data-toggle="datetimepicker">
                              <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                          </div>
                      </div>
                  </div>
                  <div class="form-group">
                    <label>Keterangan</label>
                    <div class="input-group">
                    <textarea name="keterangan" id="" cols="90" rows="10"></textarea>
                </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File Terlampir</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="file_terlampir">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Tambah Tugas</button>
                  </div>
              </form>
            </div>
            </div>
        </div>
        </div>
    </section>
    @push('custom-script')
    <script>
        $('#tanggalmulai').datetimepicker({
        format: 'YYYY-MM-DD'
    });
        $('#tanggalselesai').datetimepicker({
        format: 'YYYY-MM-DD'
    });
        $(function () {
        bsCustomFileInput.init();
    });

    </script>
    @endpush
    <!-- /.content -->
@endsection
