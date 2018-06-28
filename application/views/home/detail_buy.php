<div class="app-content content">
	<div class="content-wrapper">
		<div class="content-header row">
			<div class="content-header-left col-md-6 col-12 mb-2">
				<h3 class="content-header-title mb-0"></h3>
			</div>
		</div>
		<div class="content-body">
			<section id="events">
				<div class="container-fluid">
					<div class="row">
						<!-- detail -->
						<div class="col-md-6 col-12 ">
							<div class="card">
								<div class="card-content">
									<div class="card-body">
										<table class="table table-borderless table-hover">
											<tbody>
												<tr>
													<td>Event Name</td>
													<td><?php echo $show[0]['nama_event']?></td>
												</tr>
												<tr>
													<td>Your Name</td>
													<td><?php echo $show[0]['nama'] ?></td>
												</tr>
												<tr>
													<td>Category</td>
													<td><?php echo $show[0]['kategori_event']?></td>
												</tr>
												<tr>
													<td>Price</td>
													<td>IDR. <?php echo number_format($show[0]['harga_tiket'], 0, ".", ".")?></td>
												</tr>
												<tr>
													<td>Purchase Code</td>
													<td><?php echo $show[0]['id_transaksi']?></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<!-- End Of detail -->
					</div>
					<div class="col text-right">
						<!-- <a href="<?=site_url('Users/confirmbuy/'.$api->id_Event) ?>" class="btn btn-lg btn-success">Confirm Transaction</a> -->
					</div>
				</div>
			</section>
		</div>
	</div>
</div>
	<!-- ////////////////////////////////////////////////////////////////////////////-->