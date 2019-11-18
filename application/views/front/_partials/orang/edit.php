<?php 
  if ($this->session->flashdata('sukses'))
  {
?>
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success - </strong> Data Orang berhasil di-<b>UBAH</b>.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
<?php 
  }
?>

<form action="" method="post" enctype="multipart/form-data">
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-success">Edit Data orang</h6>
    </div>
    <div class="card-body">
      <div class="row">
        <div class="col-md-6">

          <div class="form-group">
            <label>Nama Orang</label>
            <input type="text" class="form-control" value="<?= $org->nama_orang ?>" required style="text-transform: capitalize;" name="nama_orang" autocomplete="off" placeholder="Masukkan nama orang...">
            <input type="hidden" name="id_orang" value="<?= $org->id_orang ?>">
          </div>
          
        </div>

        <div class="col-md-6">

          <div class="form-group">
            <label>Tanggal Lahir</label>
            <input type="text" class="form-control" value="<?= $org->tgl_lahir ?>" required name="tgl_lahir" id="datetimepicker1" autocomplete="off" placeholder="Masukkan Tanggal Lahir">
          </div>

        </div>

      </div>
    </div>

    <div class="card-footer">
      <button type="submit" name="submit" class="btn btn-primary btn-icon-split pull-right">
        <span class="icon text-white-50">
          <i class="fa fa-save"></i>
        </span>
        <span class="text">Edit orang</span>
      </button>
      <a href="<?= site_url('view/orang') ?>">
        <button type="button" class="btn btn-warning btn-icon-split pull-left">
          <span class="icon text-white-50">
            <i class="fa fa-reply"></i>
          </span>
          <span class="text">Kembali</span>
        </button>
      </a>
    </div>
  </div>
</form>