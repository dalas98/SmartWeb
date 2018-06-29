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
                    <table class="table table-striped table-bordered dynamic-height">
                      <thead>
                        <tr>
                          <th>ID User</th>
                          <th>Nama User</th>
                          <th>Username</th>
                          <th>Balance</th>
                          <th>Balance Update</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($show as $data) {?>
                        <tr>
                          <td><?=$data['id_user'] ?></td>
                          <td><?=$data['nama'] ?></td>
                          <td><?=$data['username'] ?></td>
                          <td>Rp. <?php echo number_format($data['balance'], 0, ".", ".")?></td>
                          <td><button type="button" class="btn-success" data-toggle="modal" title="Add Balance" data-target="#addbalance<?=$data['id_user'] ?>"><i class="fa fa-plus"></i></button>&nbsp;&nbsp;<button type="button" class="btn-danger" data-toggle="modal" title="Min Balance" data-target="#deletebalance<?=$data['id_user'] ?>"><i class="fa fa-minus"></i></button></td>
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
<!-- TAMBAH DANA -->
<?php foreach ($show as $data) {?>
<div class="modal fade" id="addbalance<?=$data['id_user'] ?>" tabindex="-1" role="dialog" aria-labelledby="balanceLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="balanceLabel">Insert Balance</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form class="form-horizontal" action="<?=site_url('Admin/insertbalance')?>" method="post">
        <div class="modal-body">
          <div class="col-12">
            <div class="form-group">
              <input type="hidden" name="id_user" value="<?=$data['id_user']?>">
              <input name="balanceupdate" class="form-control" type="text" placeholder="Balance" onkeypress="return no(event)" required>
              <input type="hidden" name="balancebefore" value="<?=$data['balance']?>">
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <input type="submit" name="" value="Continue" class="btn btn-primary">
        </div>
      </form>
    </div>
  </div>
</div>
<?php } ?>
<!-- AKHIR DARI TAMBAH DANA -->
<!-- KURANGI DANA -->
<?php foreach ($show as $data) {?>
<div class="modal fade" id="deletebalance<?=$data['id_user'] ?>" tabindex="-1" role="dialog" aria-labelledby="balanceLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="balanceLabel">Reduce Balance</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form class="form-horizontal" action="<?=site_url('Admin/reducebalance')?>" method="post">
        <div class="modal-body">
          <div class="col-12">
            <div class="form-group">
              <input type="hidden" name="id_user" value="<?=$data['id_user']?>">
              <input name="balanceupdate" class="form-control" type="text" placeholder="Reduce Balance" onkeypress="return no(event)"  required>
              <input type="hidden" name="balancebefore" value="<?=$data['balance']?>">
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <input type="submit" name="" value="Continue" class="btn btn-primary">
        </div>
      </form>
    </div>
  </div>
</div>
<?php } ?>
<!-- AKHIR DARI KURANGI DANA -->
<script>
  function no(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
      return false;
  }
</script>
