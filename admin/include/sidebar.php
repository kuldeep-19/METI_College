  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar elevation-5">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="METI Logo" class="brand-image img-circle elevation-3" style="opacity: .9">
      <span class="brand-text">METI ADMIN</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex align-items-center">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="Admin">
        </div>
        <div class="info">
          <a href="#" class="d-block">Administrator</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Quick Search..." aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
<?php
include ('sidebar-data/admin-data.php')
?>

<!-- Sidebar Menu -->
<nav class="mt-2">
<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

<?php foreach($menu as $main){ ?>
  
  <li class="nav-item">
    <a href="#" class="nav-link active">
      <i class="nav-icon <?= $main['icon']; ?>"></i>
      <p>
        <?= $main['title']; ?>
        <i class="right fas fa-angle-left"></i>
      </p>
    </a>

    <!-- LEVEL 2 -->
    <ul class="nav nav-treeview">
      <?php foreach($main['submenu'] as $sub1){ ?>

        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="fas fa-layer-group nav-icon"></i>
            <p>
              <?= $sub1['name']; ?>
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>

          <!-- LEVEL 3 -->
          <ul class="nav nav-treeview">
            <?php foreach($sub1['submenu'] as $sub2){ ?>
              <li class="nav-item">
                <a href="<?= $sub2['link']; ?>" class="nav-link">
                  <i class="fas fa-arrow-right-long nav-icon" style="font-size: 0.7rem;"></i>
                  <p><?= $sub2['name']; ?></p>
                </a>
              </li>
            <?php } ?>
          </ul>

        </li>

      <?php } ?>
    </ul>

  </li>

<?php } ?>

</ul>
</nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>