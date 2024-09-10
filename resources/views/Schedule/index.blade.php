@extends ('app.pendaftaran')

@section('content')
    <div class="breadcrumb-wrapper breadcrumb-contacts">
        <div class="d-block">
            <h1>Jadwal KARYAWAN</h1>
            <a class="btn btn-primary" href="{{ route('schedule.create') }}">Tambah Jadwal Karyawan</a>
        </div>
        <div class="d-flex">
            <form class="form-inline" action="/jadwal-karyawan/cari" method="GET">
                <label class="sr-only" for="inlineFormInputName2">Cari Pegawai</label>
                <input type="text" class="form-control mb-2 mr-sm-2" name="search" id="inlineFormInputName2" placeholder="Jane Doe" />
                <button type="submit" class="btn btn-primary mb-2">Search</button>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom d-block">
                    <h2>JADWAL SELURUH KARYAWAN</h2>
                </div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Outlet</th>
                                <th scope="col">Shift</th>
                                <th scope="col">Jam masuk</th>
                                <th scope="col">Hari</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        @foreach ($employes as $employe)
                        <tbody>
                            <tr>
                                <td>{{ $employe->tanggal }}</td>
                                <td>{{ $employe->pendaftaran->nama }}</td>
                                <td>{{ $employe->outlet }}</td>
                                <td>{{ $employe->shift }}</td>
                                <td>{{ $employe->outlet }}</td>
                                <td>{{ $employe->jam_masuk }}</td>
                                <td>{{ $employe->hari }}</td>

                                <th>
                                    <a href="{{ route('pendaftaran.edit', $employe->id) }}">
                                        <i class="mdi mdi-square-edit-outline"></i>
                                    </a>
                                    <a href="{{ url('delete', $employe->id) }}">
                                        <i class="mdi mdi-delete-outline"></i>
                                    </a>
                                </th>
                            </tr>
                        </tbody>
                    @endforeach
                    </table>
                    Halaman : {{ $employes->currentPage() }} <br/>
                    Jumlah Data : {{ $employes->total() }} <br/>
                    Data Per Halaman : {{ $employes->perPage() }} <br/>
                    <br/>

                    {{ $employes->links('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>
    </div>
@endsection
