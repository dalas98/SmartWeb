<div class="app-content content">
	<div class="content-wrapper">
		<div class="content-header row">
			<div class="col">
			<?php if($this->session->flashdata('info')): ?>
                <div class="alert alert-icon-left alert-danger alert-dismissible mb-2" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <strong>Wrong Password</strong>
                </div>
                <?php elseif($this->session->flashdata('kurang')): ?>
                <div class="alert alert-icon-left alert-warning alert-dismissible mb-2" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <strong>insufficient Balance</strong>
                </div>
            <?php endif?>
	        </div>
		</div>
		<div class="content-body">
			<section id="events">
				<div class="container-fluid">
					<div class="row match-height">
						<!-- image -->
						<div class="col-md-4 col-12">
							<div class="card">
								<div class="card-content">
									<div class="card-body">
										<!-- Card sample -->
										<img class="img-thumbnail img-fluid" src="<?php echo $api->gambar_event?>" alt="Event Image" >
										<!-- /Card sample -->
									</div>
								</div>
							</div>
						</div>
						<!-- End Of image -->
						<!-- detail -->
						<div class="col-md-8 col-12">
							<div class="card">
								<div class="card-content">
									<div class="card-body">
										<table class="table table-borderless table-hover">
											<tbody>
												<tr>
													<td>Event Name</td>
													<td><?php echo $api->nama_event?></td>
												</tr>
												<tr>
													<td>Date Performance</td>
													<td><?php echo date('d M Y', strtotime($api->jadwal_event)); ?></td>
												</tr>
												<tr>
													<td>Venue</td>
													<td><?php echo $api->lokasi_event?></td>
												</tr>
												<tr>
													<td>Category</td>
													<td><?php echo $api->kategori_event?></td>
												</tr>
												<tr>
													<td>Price</td>
													<td>IDR. <?php echo number_format($api->harga_tiket, 0, ".", ".")?></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<!-- End Of detail -->
						</div>
					</div>
					<div class="col text-right">

						<button type="button" class="btn btn-lg btn-success" data-toggle="modal" data-target="#loginmodal">Confirm Transaction</button>
						<!-- <a href="<?=site_url('Users/confirmbuy/'.$api->id_Event) ?>" class="btn btn-lg btn-success">Confirm Transaction</a> -->
					</div>
				</div>
			</section>
		</div>
	</div>
</div>
<!-- modal login -->
<div class="modal fade" id="loginmodal" tabindex="-1" role="dialog" aria-labelledby="loginmodallabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="loginmodallabel">Please Enter Password</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form class="form-horizontal" action="<?=site_url('Users/loginpay/'.$api->id_Event)?>" method="post">
				<div class="modal-body">
					<div class="col-12">
						<div class="form-group">
							<input name="password" class="form-control" type="password" placeholder="Input Password to Continue Transaction" required>
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
<!-- akhir modal login -->
	<!-- ////////////////////////////////////////////////////////////////////////////-->