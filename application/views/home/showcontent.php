<div class="app-content content">
	<div class="content-wrapper">
		<div class="content-header row">
			<div class="content-header-left col-md-6 col-12 mb-2">
				<h3 class="content-header-title mb-0"><?php echo $api->nama_event?></h3>
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
													<td>Date Performance</td>
													<td><?php echo date('d M Y', strtotime($api->jadwal_event)); ?></td>
												</tr>
												<tr>
													<td>Venue</td>
													<td><?php echo $api->lokasi_event?></td>
												</tr>
												<tr>
													<td>Category</td>
													<td>
														<select name="">
															<option value="">VIP</option>
															<option value="">Reguler</option>
														</select>
													</td>
													<!-- <td><?php echo $api->kategori_event?></td> -->
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
						<div class="col text-right">
							<?php if ($this->session->userdata('nama')): ?>
								<a href="<?=site_url('Users/detail/'.$api->id_Event)?>" class="btn btn-lg btn-success">Buy Ticket</a>
								<?php else: ?>
									<a href="<?=site_url('Login')?>" class="btn btn-lg btn-success">Login to Get Ticket</a>
								<?php endif ?>
							</div>
						</div>
					</div>
				</section>
				<br>
				<section id="gmaps">
					<div class="container-fluid">
						<div class="row">
							<div class="col-12">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">Location on Maps</h4>
									</div>
									<div class="card-content">
										<div class="card-body">
											<div id="markers" class="height-400"><h1>Ini Nanti Maps</h1></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<!-- ////////////////////////////////////////////////////////////////////////////-->