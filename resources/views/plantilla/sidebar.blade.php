

<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-5">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="img/logoHealhFeet2.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="margin-left: -2px;">
      <span class="brand-text font-weight-light">{{ config('app.name') }}</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex" style="margin-left: -14px;">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-3" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block" style="font-size: 12px;">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
           <li  class="nav-item">
            <a @click="menu=0" href="#" class="nav-link" >
              <i class="fa fa-users nav-icon"></i>
              <p>Pacientes</p>
            </a>
          </li>
          <li class="nav-item">
            <a @click="menu=1" href="#" class="nav-link">
               <i class="far fa-calendar-alt nav-icon"></i>
              <p>Calendario</p>
            </a>
          </li>
          <li class="nav-item">
            <a @click="menu=2" href="#" class="nav-link">
               <i class="far fa-user  nav-icon"></i>
              <p>Perfil</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/logout') }}" class="nav-link">
               <i class="fas fa-power-off nav-icon"></i>
              <p>Cerrar Sesión</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>