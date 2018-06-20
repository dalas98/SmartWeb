<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="app-content content">
	<div class="content-wrapper">
		<div class="content-header row">
		</div>
		<div class="content-body">
			<section class="flexbox-container">
				<div class="col-12 d-flex align-items-center justify-content-center">
					<div class="col-md-4 col-10 box-shadow-2 p-0">
						<div class="card border-grey border-lighten-3 m-0">
							<div class="card ">
								<div class="card-body">

									<h4 class="card-title">A PHP Error was encountered</h4>

									<p class="card-text">Severity: <?php echo $severity; ?></p>
									<p class="card-text">Message:  <?php echo $message; ?></p>
									<p class="card-text">Filename: <?php echo $filepath; ?></p>
									<p class="card-text">Line Number: <?php echo $line; ?></p>

									<?php if (defined('SHOW_DEBUG_BACKTRACE') && SHOW_DEBUG_BACKTRACE === TRUE): ?>

										<p class="card-text">Backtrace:</p>
										<?php foreach (debug_backtrace() as $error): ?>

											<?php if (isset($error['file']) && strpos($error['file'], realpath(BASEPATH)) !== 0): ?>

											<p class="card-text">
												File: <?php echo $error['file'] ?><br />
												Line: <?php echo $error['line'] ?><br />
												Function: <?php echo $error['function'] ?>
											</p>

										<?php endif ?>

									<?php endforeach ?>

								<?php endif ?>

							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>