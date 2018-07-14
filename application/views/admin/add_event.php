<div class="app-content content">
  <div class="content-wrapper">
    <div class="content-body">
      <!-- Scroll - vertical, dynamic height table -->
      <section id="scroll-dynamic">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-content collapse show">
                <div class="card-body card-dashboard">
                  <?php if($this->session->flashdata('salah')): ?>
                    <div class="alert alert-icon-left alert-warning alert-dismissible mb-2" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      <strong>Harap Masukan File Gambar</strong>
                    </div>
                    <?php elseif($this->session->flashdata('sucess')): ?>
                    <div class="alert alert-icon-left alert-success alert-dismissible mb-2" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      <strong>Berhasil Menambahkan Event</strong>
                    </div>
                  <?php endif ?>
                  <button class="btn btn-success" data-toggle="modal" title="Add Event" data-target="#addevent"><i class="ft-plus"></i>Add Event</button>
                  <table class="table table-striped table-bordered dynamic-height">
                    <thead>
                      <tr>
                        <th>Nama</th>
                        <th>Jadwal</th>
                        <th>Lokasi</th>
                        <th>Harga</th>
                        <th>Kategori</th>
                        <th>Gambar</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($see as $data) {?>
                        <tr>
                          <td><?=$data['nama_event']?></td>
                          <td><?=date('D, d M Y H:i', strtotime($data['jadwal_event']));?></td>
                          <td><?=$data['lokasi_event']?></td>
                          <td width="80px">Rp. <?php echo number_format($data['harga_tiket'], 0, ".", ".")?></td>
                          <td><?=$data['kategori_event']?></td>
                          <td><button class="btn-secondary" data-toggle="modal" title="Add Event" data-target="#seeimage<?=$data['id_Event']?>"><i class="ft-search"></i></button></td>
                        </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--/ Scroll - vertical, dynamic height table -->
    </div>
  </div>
</div>
<!-- TAMBAH EVENT -->
<div class="modal fade" id="addevent" tabindex="-1" role="dialog" aria-labelledby="balanceLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="balanceLabel">Add Event</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form class="form-horizontal" action="<?=site_url('Admin/insertevent')?>" method="post" enctype="multipart/form-data">
        <div class="modal-body">
          <div class="col-12">
            <div class="form-group">
              <input name="nama" class="form-control" type="text" placeholder="Nama Event" required>
            </div>
          </div>
          <div class="form-group input-group col-12">
            <input type="date" class="form-control" name="date" required><input type="time" class="form-control" name="time" required>
          </div>
          <div class="col-12">
            <div class="form-group">
              <input name="lokasi" class="form-control" type="text" placeholder="Lokasi Event" required>
            </div>
          </div>
          <div class="col-12 input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text">Rp.</span>
            </div>
            <input name="harga" class="form-control" type="text" placeholder="Harga Tiket" onkeypress="return no(event)" required>
          </div>
          <div class="col-12">
            <div class="form-group">
              <input name="kategori" class="form-control" type="text" placeholder="Kategori Event" required>
            </div>
          </div>
          <div class="col-12">
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="inputGroupFile02" name="img" accept="image/*" required>
              <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
            </div>
            <!-- <div class="form-group">
              <input name="img" class="form-control" type="file" placeholder="Gambar Event" required>
            </div> -->
          </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <input type="submit" name="" value="Add" class="btn btn-primary">
        </div>
      </form>
    </div>
  </div>
</div>
<!-- AKHIR DARI TAMBAH EVENT -->
<!-- LIHAT GAMBAR -->
<?php foreach ($see as $data) {?>
  <div class="modal fade" id="seeimage<?=$data['id_Event']?>" tabindex="-1" role="dialog" aria-labelledby="balanceLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="balanceLabel"><?=$data['nama_event']?></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="col-12">
            <div class="form-group">
              <img src="<?=base_url('assets/images/upload/'.$data['image_event'])?>" alt="" width="100%">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php } ?>
<!-- AKHIR DARI LIHAT GAMBAR -->
<script>
  function no(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
      return false;
  }
</script>