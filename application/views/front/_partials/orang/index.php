<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800"><i class="fas fa-users"></i> Data orang</h1>

<div class="card shadow mb-4">
  <div class="card-header py-3">
    <button class="pull-right btn btn-primary" data-toggle="modal" data-target="#modal_addorg"><i class="fas fa-user-plus"></i> Tambah data Orang</button>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table display nowrap table-bordered table-hover" id="example" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>No.</th>
            <th>Nama Orang</th>
            <th>Tanggal Lahir</th>
            <th>Opsi</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $no = 1;
            function formatAngka($angka)
            {
              $hasil = number_format($angka, 0, '.', '.');
              return $hasil;
            }
              foreach($orang as $tampil_org):
              ?>
                <tr style="text-align: center;">
                  <td><?= $no++ ?></td>
                  <td><?= $tampil_org->nama_orang ?></td>
                  <td><?= indonesian_date($tampil_org->tgl_lahir, 'l, d F Y') ?></td>
                  <td width="250" style="text-align: center;">
                    <a href="<?php echo site_url('view/edit/'.$tampil_org->id_orang) ?>" class="btn btn-success btn-circle" data-toggle="tooltip" data-placement="left" title="Ubah Data"><i class="material-icons">edit</i></a>

                    <a onclick="deleteConfirm('<?php echo site_url('view/delete/'.$tampil_org->id_orang) ?>')" data-toggle="tooltip" data-placement="left" title="Hapus Data" href="#" class="btn btn-small btn-danger btn-circle"><i class="material-icons">delete_outline</i></a>                     
                  </td>
                </tr>
              <?php
              endforeach;
            ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<!-- MODAL ADD / TAMBAH -->
<div class="modal fade" id="modal_addorg" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content" role="document">
      <div class="modal-header">
        <h4 class="modal-title"><i class="fas fa-user-plus"></i> Tambah Data Orang</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div id="pesan"></div>

        <form method="post" enctype="multipart/form-data" id="tambah_org">
          <div class="row">
            <div class="col-md-6">

              <div class="form-group">
                <label>Nama Orang</label>
                <input type="text" class="form-control" required style="text-transform: capitalize;" name="nama_orang" autocomplete="off" placeholder="Masukkan nama orang...">
              </div>
              
            </div>

            <div class="col-md-6">

              <div class="form-group">
                <label>Tanggal Lahir</label>
                <input type="text" class="form-control" required name="tgl_lahir" id="datetimepicker1" autocomplete="off" placeholder="Masukkan Tanggal Lahir">
              </div>

            </div>

          </div>
        </form>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning mr-auto" data-dismiss="modal"><i class="fa fa-reply"></i> Kembali</button>
        <button type="submit" name="submit" class="btn btn-primary btn-icon-split pull-right submit_addorg">
          <span class="icon text-white-50">
            <i class="fa fa-save"></i>
          </span>
          <span class="text">Simpan Data</span>
        </button>
      </div>
      
    </div>
  </div>
</div>
<!-- END MODAL ADD -->