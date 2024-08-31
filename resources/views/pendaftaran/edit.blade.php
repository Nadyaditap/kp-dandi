@extends ('app.pendaftaran')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h2>Edit Dataa Keryawan</h2>
                </div>

                <div class="card-body">

                    <form action="{{ route("pendaftaran.update", $employe->id) }}" method="post">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Kode</label>
                            <input type="text" class="form-control" id="kode" name="kode"
                                placeholder="Masukkan Kode" value="{{ $employe->kode }}">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlNIK">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama"
                                placeholder="Masukkan Nama" value="{{ $employe->nama }}">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlAyah">Jabatan</label>
                            <input type="text" class="form-control" id="jabatan" name="jabatan"
                                placeholder="Masukkan Jabatan" value="{{ $employe->jabatan }}">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlIbu">Status Kerja</label>
                            <input type="text" class="form-control" id="status_kerja" name="status_kerja"
                                placeholder="Masukkan Status Kerja" value="{{ $employe->status_kerja }}">
                        </div>


                        <div class="form-footer pt-4 pt-5 mt-4 border-top">
                            <button type="submit" class="btn btn-primary btn-default">Simpan</button>
                            <a class="btn btn-secondary btn-default" href="{{ route('pendaftaran.index') }}">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
