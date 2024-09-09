@extends ('app.pendaftaran')

@section('content')
  @if (session('success'))
  <div class="alert alert-success">{{ session('success') }}</div>
  @endif
    <div class="breadcrumb-wrapper breadcrumb-contacts">

        <div>
            <h1>DATA KARYAWAN</h1>
        </div>

        <div>
            <a class="btn btn-primary" href="{{ route('pendaftaran.create') }}">Tambah Karyawan</a>
            </button>
        </div>
    </div>
    <div class="row">


        <div class="col-lg-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom d-block">
                    <h2>DATA SELURUH KARYAWAN</h2>
                    <p>
                </div>


                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>

                                <th scope="col">Kode</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Jabatan</th>
                                <th scope="col">Status Kerja</th>
                                <th scope="col">AKSI</th>
                            </tr>
                        </thead>
                        @foreach ($employes as $employe)
                            <tbody>
                                <tr>
                                    <td>KRY{{ $employe->id }}</td>
                                    <td>{{ $employe->nama }}</td>
                                    <td>{{ $employe->jabatan }}</td>
                                    <td>{{ $employe->status_kerja }}</td>

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
                </div>
            </div>
        </div>
    </div>
@endsection
