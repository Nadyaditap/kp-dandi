<header class="main-header " id="header">
    <nav class="navbar navbar-static-top navbar-expand-lg">
        <!-- Sidebar toggle button -->
        <button id="sidebar-toggler" class="sidebar-toggle">
            <span class="sr-only">Toggle navigation</span>
        </button>

        <div class="search-form d-none d-lg-inline-block">
            <div class="input-group">
                <button type="button" name="search" id="search-btn" class="btn btn-flat">
                    <i class="mdi mdi-magnify"></i>
                </button>
                <input type="text" name="query" id="search-input" class="form-control"
                    placeholder="Cari sesuatu..." autofocus autocomplete="off" />
            </div>

        </div>
        <div class="d-flex">
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{  auth()->user()->name }}
                </button>
                <div class="dropdown-menu" style="border-radius: 10px; padding: 9px;" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="/logout">Logout</a>

                </div>
              </div>

        </div>
    </nav>
</header>
