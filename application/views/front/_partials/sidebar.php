<ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">
  
  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo site_url('view') ?>">
    <div class="sidebar-brand-icon">
      <i class="fab fa-earlybirds"></i>
    </div>
    <div class="sidebar-brand-text mx-3 mt-4" style="text-align: center;">
      <p><?= SITE_NAME ?></p>
    </div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
    Menu
  </div>

  <li class="nav-item <?php echo $this->uri->segment(2) == 'view' ? 'active': '' ?> <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
    <a class="nav-link" href="<?php echo site_url('view') ?>">
      <i class="fas fa-fw fa-home"></i>
      <span>Home</span>
    </a>
  </li>

  <li class="nav-item <?php echo $this->uri->segment(3) == 'orang' ? 'active': '' ?>">
    <a class="nav-link" href="<?php echo site_url('view/orang') ?>">
      <i class="fas fa-users"></i>
      <span>Data Orang</span>
    </a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>