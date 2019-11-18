<!DOCTYPE html>
<html lang="en">
<head>

  <?php $this->load->view("front/_partials/head") ?>

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php $this->load->view("front/_partials/sidebar") ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">

        <?php $this->load->view("front/_partials/header") ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">
          <?php $this->load->view("front/_partials/home") ?>
        </div>
      </div>

      <!-- Footer -->
      <?php $this->load->view("front/_partials/footer") ?>

    </div>

  </div>

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

<?php $this->load->view("front/_partials/modal") ?>
<?php $this->load->view("front/_partials/js") ?>

</body>
</html>
