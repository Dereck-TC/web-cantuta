  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?= media(); ?>/images/logo.png" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">CANTUTA</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= media(); ?>/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Administrador</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?php echo base_url();?>/Home" class="nav-link">
              <i class="nav-icon fas fa-store"></i>
                <p>
                  Ir al sitio web</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url();?>/Dashboard" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-shopping-cart"></i>
              <p>
                Tienda
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="<?php echo base_url();?>/Productos" class="nav-link">
                    <i class="nav-icon fas fa-gifts"></i>
                    <p>Productos</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url();?>/Categorias" class="nav-link">
                    <i class="nav-icon fas fa-tags"></i>
                    <p>Categorias</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url();?>/Marcas" class="nav-link">
                    <i class="nav-icon far fa-bookmark"></i>
                    <p>Marcas</p>
                    </a>
                </li>
            </ul>
          </li>
          <li class="nav-item menu-open">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
              <p>
                Usuarios
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="<?php echo base_url();?>/Clientes" class="nav-link">
                    <i class="nav-icon far fa-id-card"></i>
                    <p>Clientes</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url();?>/Roles" class="nav-link">
                    <i class="nav-icon fas fa-user-cog"></i>
                    <p>Roles</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url();?>/Usuarios" class="nav-link">
                    <i class="nav-icon far fa-address-book"></i>
                    <p>Miembros</p>
                    </a>
                </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url();?>/Pedidos" class="nav-link">
            <i class="nav-icon fas fa-truck"></i>
              <p>
                Pedidos
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url();?>/Paginas" class="nav-link">
            <i class="nav-icon far fa-map"></i>
              <p>
                P??ginas
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li> 
          <li class="nav-item">
            <a href="<?php echo base_url();?>/Logout" class="nav-link">
            <i class="nav-icon fas fa-power-off"></i>
              <p>
                Salir
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>     
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>