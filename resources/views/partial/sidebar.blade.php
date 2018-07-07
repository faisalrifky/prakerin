<div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('assets/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">admin</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fa fa-dashboard"></i>
              <p>
                Dashboard
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
          <li class="nav-item">
            <a href="bahan" class="nav-link">
              <i class="nav-icon fa fa-th"></i>
              <p>
                bahan baku
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="kategori" class="nav-link">
              <i class="nav-icon fa fa-edit"></i>
              <p>
                kategori
              </p>
            </a>

          <li class="nav-item has-treeview">
            <a href="jenis" class="nav-link">
              <i class="nav-icon fa fa-edit"></i>
              <p>
                jenis
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
          <li class="nav-item has-treeview">
            <a href="produk" class="nav-link">
              <i class="nav-icon fa fa-edit"></i>
              <p>
                produk
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            </ul>
          <li class="nav-header">LABELS</li>
          <li class="nav-item">
           <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    </form>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-circle-o text-warning"></i>
              <p>Warning</p>
            </a>
          </li>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    