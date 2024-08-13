@extends ('app.pendaftaran')

@section ('content')

<div class="breadcrumb-wrapper breadcrumb-contacts">
  <div>
    <h1>Data Karyawan</h1>
  </div>

  <div>
    <a class="btn btn-primary" href="{{ url ('/pendaftaran/create') }}">Tambah Karyawan</a>
    </button>
  </div>
</div>
<div class="row">
	<div class="col-lg-12">
		<div class="card card-default">
			<div class="card-header card-header-border-bottom">
				<h2>Data Karyawan</h2>
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
          @foreach($pendaftaran as $row)
					<tbody>
						<tr>
							<td>{{ $row->id }}</td>
							<td>{{ $row->nama }}</td>
              <td>{{ $row->nama_ayah }}</td>
              <td>{{ $row->nama_ibu }}</td>

              <th>
                <a href="{{ url('pendaftaran/edit', $row->id) }}">
                  <i class="mdi mdi-square-edit-outline"></i>
                </a>
                <a href="{{ url('delete', $row->id) }}">
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