<aside class="left-sidebar bg-sidebar">
          <div id="sidebar" class="sidebar sidebar-with-footer">
            <!-- Aplication Brand -->
            <div>
              <a href="{{ url('dashboard') }}" style="display: flex; flex-direction: column; align-items: center">
                <img src="{{asset('assets/img/Logo.png')}}" style="width: 130px;" alt="Merhaba Kebab" />
                <p>Merhaba Kebab</p>
              </a>

            </div>

            <!-- begin sidebar scrollbar -->
            <div class="" data-simplebar style="height: 100%;">
              <!-- sidebar menu -->
              <ul class="nav sidebar-inner" id="sidebar-menu">

              <a>
              <li class="has-sub ">
                  <a href="{{ url ('/pendaftaran') }}">
                    <i class="mdi mdi-pencil-box-multiple"></i>
                    <span class="nav-text">Data Karyawan</span>
                  </a>
                </li>
                <li class="has-sub ">
                  <a href="{{ route("schedule.index") }}">
                    <i class="mdi mdi-pencil-box-multiple"></i>
                    <span class="nav-text">Jadwal Karyawan</span>
                  </a>
                </li>
                </li>

                <li class="has-sub expand">
                  <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#menu"
                    aria-expanded="false" aria-controls="dashboard">
                    <i class="mdi mdi-account-details"></i>
                    <span class="nav-text">Menu Baru</span> <b class="caret"></b>
                  </a>

                  <ul class="collapse" id="menu" data-parent="#sidebar-menu">
                    <div class="sub-menu">
                      <li class="active">
                        <a class="sidenav-item-link" href="#">
                          <span class="nav-text">Data</span>
                        </a>
                      </li>
                    </div>
                  </ul>
                </li>



              </ul>

            </div>

          </div>
        </aside>
