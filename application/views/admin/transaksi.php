<div class="container">


	<div class="col-md-3">
		<h1 class="h3 text-gray-800" style="color: grey;">Daftar Pesanan</h1>
		<p>Harga Rp 15.000/Kamar</p>
	</div>

	<?php if ($this->session->flashdata()) : ?>
		<div class="row mt-3">
			<div class="col-md-4">
				<div class="alert alert-success alert-dismissible fade show" role="alert">
					<strong><?= $this->session->flashdata('message'); ?></strong>
				</div>
			</div>
		</div>
	<?php endif; ?>

	<div class="row mb-5">
		<?php foreach ($kebersihan as $ldr) : ?>
			<div class="col-md-4">

				<div class="card mt-3 mb-3">
					<div class="card-header">
						<h5 class="text-center">
							<strong class=""><?php echo $ldr["kode_transaksi"] ?></strong>
						</h5>
					</div>
					<div class="card-body">

						<h3><?php echo $ldr["nama"] ?></h3>
						<p>Alamat : <?php echo $ldr["alamat"] ?></p>
						<p>Patokan : <?php echo $ldr["patokan"] ?></p>
						<p>No Hp : <?php echo $ldr["nohp"] ?></p>
						<p>Jumlah Kamar : <?php echo $ldr["kamar"] ?></p>
						<?php $tot = ((int)$ldr["kamar"] * (int)('15000')); ?>
						<p>Tagihan : <?php echo $tot ?></p>
						<p>Status Pembayaran :

							<?php if ($ldr["status_pembayaran"] == "Belum Bayar") : ?>
								<span class="badge badge-warning">
									<?php echo $ldr["status_pembayaran"] ?>
								</span>
							<?php elseif ($ldr["status_pembayaran"] == "Lunas") : ?>
								<span class="badge badge-success">
									<?php echo $ldr["status_pembayaran"] ?>
								</span>
							<?php endif; ?>

						</p>

						<?php if ($ldr["status_service"] == "Service Selesai") : ?>

							<p>Status Service : Diterima</p>
							<p>Ulasan : <?= $ldr["ulasan"] ?></p>

						<?php elseif ($ldr["status_service"] == "Cancel") : ?>

							<p class="alert alert-danger">Pesanan dibatalkan</p>

						<?php elseif ($ldr["status_service"] == "Service Selesai") : ?>

							<p>Status Service : Diterima</p>

						<?php elseif ($ldr["status_service"] == "Tunggu sebentar ya") : ?>

							<p class="alert alert-primary">Pesanan Baru</p>

						<?php endif; ?>


					</div>
				</div>

			</div>
		<?php endforeach; ?>
	</div>

</div>