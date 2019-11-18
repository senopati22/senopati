<style>
#chartdiv {
  width: 100%;
  height: 500px;
}
</style>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800"><i class="fas fa-home"></i> Home</h1>
</div>

<?php
$periksa = $this->db->query("SELECT * FROM orang WHERE MONTH(tgl_lahir) = MONTH(CURDATE()) AND DAYOFMONTH(tgl_lahir) = DAYOFMONTH(CURDATE())")->result();
foreach($periksa as $prk)
{
  ?>
  <div style='padding:10px; text-align: center;' class='alert alert-success'>
    <span class='fas fa-birthday-cake'></span> Happy Birthday! Untuk <strong><?= $prk->nama_orang ?></strong> semoga panjang umur <span class='fas fa-birthday-cake'></span>
  </div>
  <?php
}
?>

