@extends('layouts.app')
@section('title', 'Dashboard Pendidik')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        {{-- <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Pelajaran</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard.pendidik') }}">Home</a></li>
                        <li class="breadcrumb-item active">Mapel</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid --> --}}
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Judul</label>
                                    <input type="email" class="form-control" id="exampleFormControlInput1" autofocus>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Penjelasan</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="upload">File</label>
                                    <input type="file" class="form-control-file" id="upload">
                                    <small class="text-muted">*Maksimal ukuran 10 MB</small>
                                </div>

                                <a href="{{ route('dashboard.pelajaran') }}" class="btn btn-warning">Batal</a>
                                <button type="submit" class="btn btn-primary">Submit</button> {{-- waktu pelajaran berjalan ketika ini di klik --}}
                            </form>
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
