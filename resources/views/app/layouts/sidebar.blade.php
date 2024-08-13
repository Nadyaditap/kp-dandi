<aside class="left-sidebar bg-sidebar">
          <div id="sidebar" class="sidebar sidebar-with-footer">
            <!-- Aplication Brand -->
            <div class="app-brand">
              <a href="{{ url('dashboard') }}" title="Data karyawan">
                <svg
                  class="brand-icon"
                  xmlns="http://www.w3.org/2000/svg"
                  preserveAspectRatio="xMidYMid"
                  width="30"
                  height="33"
                  viewBox="0 0 30 33">
                  <g fill="none" fill-rule="evenodd">
                    <path class="logo-fill-blue" fill="#7DBCFF" d="M0 4v25l8 4V0zM22 4v25l8 4V0z" />
                    <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
                  </g>
                </svg>

                <span class="brand-name text-truncate">Mau NgeGrill</span>
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
                  <a href="{{ url ('/pendaftaran') }}">
                    <i class="mdi mdi-pencil-box-multiple"></i>
                    <span class="nav-text">Laporan</span> 
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