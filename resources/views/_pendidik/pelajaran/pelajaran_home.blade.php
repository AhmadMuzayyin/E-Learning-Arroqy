@extends('layouts.app')
@section('title', 'Dashboard Pendidik')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Pelajaran</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard.pendidik') }}">Home</a></li>
                        <li class="breadcrumb-item active">Pelajaran</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h3 class="card-title">Data Pelajaran</h3>
                            <a href="" class="ml-auto">
                                {{-- <button class="btn btn-primary">Tambah Data Pelajaran</button> --}}
                            </a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            {{-- <table id="table_pelajaran" class="table table-bordered table-hover">
              <thead>
              <tr>
                <th>No</th>
                <th>Pelajaran</th>
                <th>Tanggal & Waktu</th>
                <th>Guru Pengampu</th>
                <th>Aksi</th>
              </tr>
              </thead>
              <tbody>
              <tr>
                <td>1</td>
                <td>Matematika</td>
                <td>Senin, 19-Juli-2021. 10:00:00 </td>
                <td>Bu Sri Mulyani. S.Pd</td>
                <td>Edit, Delete</td>
              </tr>
              <tr>
                <td>2</td>
                <td>Bahasa Inggris</td>
                <td>Selasa, 20-Juli-2021. 07:00:00</td>
                <td>Bu Handayani. S.Pd</td>
                <td>Edit Delete</td>
              </tr>
              </tfoot>
            </table> --}}

                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Matematika</h5>
                                    <p class="card-text text-muted">Jam pelajaran berlangsung dari jam 09.00 WIB, dan
                                        waktu akan berjalan ketika pelajaran sudah disubmit.</p>
                                    <a href="{{ route('dashboard.mapel') }}" class="card-link text-decoration-none">Tambah
                                        penjelasan</a>
                                    {{-- masuk ke form --}}
                                    <a href="#" class="card-link text-decoration-none">Selesaikan</a>
                                    {{-- menyelesaikan pelajaran (diliburkan) --}}
                                </div>
                            </div>

                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->


@endsection

@push('after-script')

    <script>
        $(function() {

            $('#table_pelajaran').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });

        });
    </script>

@endpush
