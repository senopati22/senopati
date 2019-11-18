<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

  <!-- Sidebar Toggle (Topbar) -->
  <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
    <i class="fa fa-bars"></i>
  </button>

  <a href="#" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" style="cursor: default; color: #858796!important; font-family: Calibri; float: left; padding: 12px 10px; font-size: 18px; font-weight: normal; text-decoration: none;">
    <i class="far fa-calendar-alt"></i>
    <script type="text/javascript">
      var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
      var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
      var date = new Date();
      var day = date.getDate();
      var month = date.getMonth();
      var thisDay = date.getDay(),
          thisDay = myDays[thisDay];
      var yy = date.getYear();
      var year = (yy < 1000) ? yy + 1900 : yy;
      document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);
    </script>
  </a>

  <!-- Topbar Navbar -->
  <ul class="navbar-nav ml-auto">

    <!-- Nav Item - Alerts -->
    <li class="nav-item dropdown no-arrow mx-1" id="pesan_sedia">
      <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-bell fa-fw"></i>
        <!-- Counter - Alerts -->
        <?php
          $query = $this->db->query("SELECT COUNT(nama_orang) as jumlah FROM orang WHERE MONTH(tgl_lahir) = MONTH(CURDATE()) AND DAYOFMONTH(tgl_lahir) = DAYOFMONTH(CURDATE())")->result();
          foreach($query as $jml)
          {
            if($jml->jumlah >= 1)
            {
        ?>
            <span class="badge badge-success badge-counter"><?= $jml->jumlah ?></span>
        <?php
            }
            else{}
          }
        ?>        
      </a>
      <!-- Dropdown - Alerts -->
      <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
        <h6 class="dropdown-header">
          Pesan Notification
        </h6>
        <?php
          $periksa = $this->db->query("SELECT * FROM orang WHERE MONTH(tgl_lahir) = MONTH(CURDATE()) AND DAYOFMONTH(tgl_lahir) = DAYOFMONTH(CURDATE())")->result();
          foreach($periksa as $prk):
          ?>
          <a class="dropdown-item d-flex align-items-center" href="#">
            <div class="mr-3">
              <div class="icon-circle bg-success">
                <i class="fas fa-birthday-cake text-white"></i>
              </div>
            </div>
            <div>
              Happy Birthday! Untuk <?= $prk->nama_orang ?> semoga panjang umur.
            </div>
          </a>
          <?php
          endforeach;
        ?>
      </div>
    </li>

    <div class="topbar-divider d-none d-sm-block"></div>

    <!-- Nav Item - User Information -->
    <li class="nav-item dropdown no-arrow">
      <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= SITE_NAME ?></span>
        <img class="img-profile rounded-circle" src="<?php echo base_url('image/user.png') ?>">
      </a>
    </li>

  </ul>

</nav>
<!-- End of Topbar -->