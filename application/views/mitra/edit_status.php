<div class="container">
	<div class="row mt-3 justify-content-center">
		<div class="col-md-6">

			<!-- <form action="<?= base_url('mitra/edit_status') ?>" method="post"> -->
			<form action="" method="post">

				<h1 class="mb-5" style="color: grey;text-align: center">Update Status by Mitra</h1>

				<div class="card">
					<div class="card-header" style="background-color: grey;color: white">Status</div>

					<div class="card-body">

						<?php if (validation_errors()) : ?>
							<div class="alert alert-danger" role="alert">
								<?= validation_errors(); ?>
							</div>
						<?php endif; ?>

						<?php if ($this->session->flashdata()) : ?>
							<div class="row mt-2">
								<div class="col-md-12">
									<div class="alert alert-info alert-dismissible fade show" role="alert">
										<strong><?= $this->session->flashdata('message'); ?></strong>
									</div>
								</div>
							</div>
						<?php endif; ?>

						<div class="form-group">

							<input type="hidden" name="id" value="<?= $kebersihan["id"] ?>">
							<!-- <input type="hidden" value="<?= $nama["user"]["nama"] ?>"> -->

							<select class="custom-select" name="status_service" id="status_service">

								<option value="<?= $kebersihan["status_service"] ?>"><?= $kebersihan["status_service"] ?></option>
								<option value="Service Selesai">Service Selesai</option>
								<option value="Tunggu sebentar ya">Tunggu sebentar ya</option>

							</select>

						</div>

					</div> <!-- card body -->

				</div> <!-- card -->

				<button type="submit" class="btn btn-primary form-control mt-3" style="box-shadow: 5px 10px 30px grey;margin-bottom: 100px">Update</button>

			</form>
		</div>

	</div>
</div>