<div class="app-content content">
    <div class="content-wrapper">
      <div class="content-body">
        <!-- Stats -->
        <div class="row">
          <div class="col-xl-3 col-lg-6 col-12">
            <div class="card">
              <div class="card-content">
                <div class="media align-items-stretch">
                  <div class="p-2 text-center bg-primary bg-darken-2">
                    <i class="icon-camera font-large-2 white"></i>
                  </div>
                  <div class="p-2 bg-gradient-x-primary white media-body">
                    <h5>Products</h5>
                    <h5 class="text-bold-400 mb-0"><i class="ft-plus"></i> 28</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6 col-12">
            <div class="card">
              <div class="card-content">
                <div class="media align-items-stretch">
                  <div class="p-2 text-center bg-danger bg-darken-2">
                    <i class="icon-user font-large-2 white"></i>
                  </div>
                  <div class="p-2 bg-gradient-x-danger white media-body">
                    <h5>Users</h5>
                    <h5 class="text-bold-400 mb-0"><?php  ?></h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--/ Stats -->
        <table class="table table-hover"> 
          <thead> 
              <tr>  
                <th>ID User</th>
                <th>Nama User</th>
                <th>Username</th>
                <th>Balance</th>
                <th>Tambah Saldo</th>
              </tr>
          </thead>
          <?php foreach ($show as $data) {?>
          <tbody> 
            <tr>  
              <td><?=$data['id_user'] ?></td>
              <td><?=$data['nama'] ?></td>
              <td><?=$data['username'] ?></td>
              <td><?=$data['balance'] ?></td>
              <td><a href="" class="btn btn-primary"><i class="fa fa-plus"></i></a></td>
            </tr>
          </tbody>
        <?php }?>
        </table>
      </div>
    </div>
  </div>