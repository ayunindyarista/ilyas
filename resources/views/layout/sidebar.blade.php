<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <h3 style="color: #fff; text-align:center; margin-top:10px;">LPPM</h3>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info" style="color: #fff; ">
          {{-- @if(\Session::has('NAMA')) 
            {{ Session::get('NAMA') }}
          @endif --}}
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-header">DATA</li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link active">
              <p>PENELITI
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="Peneliti" class="nav-link active">
                  <i class="nav-icon fas fa-table"></i>
                    <p>Data Peneliti</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link active">
              <p>PENDANAAN
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="Pendanaan" class="nav-link active">
                  <i class="nav-icon fas fa-table"></i>
                    <p>Data Pendanaan</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link active">
              <p>LUARAN WAJIB
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="Luaranwajib" class="nav-link active">
                  <i class="nav-icon fas fa-table"></i>
                    <p>Data Luaran Wajib</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link active">
              <p>LUARAN TAMBAHAN
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="Luarantambahan" class="nav-link active">
                  <i class="nav-icon fas fa-table"></i>
                    <p>Data Luaran Tambahan</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link active">
              <p>FAKULTAS
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="Fakultas" class="nav-link active">
                  <i class="nav-icon fas fa-table"></i>
                    <p>Data Fakultas</p>
                </a>
              </li>
            </ul>
          </li>  

          <li class="nav-header"></li>
          <li class="nav-item has-treeview">
              <a href="#" class="nav-link active">
                  <p>PENELITIAN
                  <i class="fas fa-angle-left right"></i>
                  </p>
              </a>
              <ul class="nav nav-treeview">
                  <li class="nav-item">
                  <a href="/Penelitian" class="nav-link active">
                      <i class="nav-icon fas fa-table"></i>
                      <p>Data Penelitian</p>
                  </a>
                  </li>
              </ul>
          </li>

          <li class="nav-header"></li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link active">
                <p>USER ADMIN
                <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                <a href="User" class="nav-link active">
                    <i class="nav-icon fas fa-table"></i>
                    <p>Data UserAdmin</p>
                </a>
                </li>
            </ul>
          </li>
          <!-- <td>
            <a href="/keluar"><button type="button" class="btn btn-block btn-danger btn-sm">Keluar</button>
          </td> -->
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

