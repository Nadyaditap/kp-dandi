@extends ('app.create')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h2>Tambah jadwal Karyawan</h2>
                </div>

                <div class="card-body">
                    <form action="{{ route('schedule.store') }}" method="POST">
                        @csrf
                        @method('post')
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Tanggal</label>
                            <input type="date" class="form-control" id="tanggal" name="tanggal">
                        </div>
                        <div class="form-group d-flex flex-column">
                            <label for="exampleFormControlInput1">Outlet</label>
                            <select class="custom-select" name="outlet" id="shift">

                                <option value="Antapani">Antapani</option>
                                <option value="Buah batu">Buah batu</option>
                                <option value="Cikutra">Cikutra</option>
                                <option value="Dipatiukur">Dipatiukur</option>
                                <option value="Geger kalong">Geger kalong</option>
                                <option value="Sukabirus">Sukabirus</option>
                                <option value="Taman Sari">Taman Sari</option>
                              </select>
                        </div>

                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <select class="custom-select" name="pendaftaran_id" id="pendaftaran_id">
                                @foreach ($employes as $employe)
                                <option value={{$employe->id}}>{{$employe->nama}}</option>
                                @endforeach


                            </select>
                        </div>

                        <div class="form-group d-flex flex-column">
                            <label for="exampleFormControlAyah">Pilih Shift :</label>
                            <select class="custom-select" name="shift" id="shift">
                                <option value="pagi">Pagi</option>
                                <option value="siang">Siang</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="jam_masuk">Jam masuk</label>
                            <input type="text" class="form-control" id="jam_masuk" name="jam_masuk"
                                placeholder="Masukan Jam masuk?">
                        </div>

                        <div class="form-group d-flex flex-column">
                            <label for="hari">Hari</label>
                            <select class="custom-select" name="hari" id="hari">
                                <option value="senin">Senin</option>
                                <option value="selasa">Selasa</option>
                                <option value="rabu">Rabu</option>
                                <option value="kamis">Kamis</option>
                                <option value="jumat">Jumat</option>
                                <option value="sabtu">Sabtu</option>
                                <option value="minggu">Minggu</option>
                              </select>
                        </div>


                        <div class="form-footer pt-4 pt-5 mt-4 border-top">
                            <button type="submit" class="btn btn-primary btn-default">Simpan</button>
                            <a class="btn btn-secondary btn-default" href="{{ url('pendaftaran') }}">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
