<!-- Default box -->
<div class="card card-solid">
	<div class="card-body">
		<div class="row">
			<div class="col-12 col-sm-6">
				<h3 class="d-inline-block d-sm-none"><?= $barang->nama_barang ?></h3>
				<div class="col-12">
					<img src="<?= base_url('assets/gambar/' . $barang->gambar) ?>" class="product-image" alt="Product Image">
				</div>
				<div class="col-12 product-image-thumbs">
					<div class="product-image-thumb active"><img src="<?= base_url('assets/gambar/' . $barang->gambar) ?>" alt="Product Image"></div>
					<?php foreach ($gambar as $key => $value) { ?>
						<div class="product-image-thumb"><img src="<?= base_url('assets/gambarbarang/' . $value->gambar) ?>" alt="Product Image"></div>
					<?php } ?>


				</div>
			</div>
			<div class="col-12 col-sm-6 mt-3">
				<table class="table">
					<tr>
						<td>Nama Produk</td>
						<td><strong><?= $barang->nama_barang ?></strong></td>
					</tr>
					<tr>
						<td>Kategori</td>
						<td><strong><?= $barang->nama_kategori ?></strong></td>
					</tr>
					<tr>
						<td>Deskripsi</td>
						<td><strong><?= $barang->deskripsi ?></strong></td>
					</tr>
					<tr>
						<td>Stok</td>
						<td><strong><?= $barang->ketersediaan ?></strong></td>
					</tr>
					<tr>
						<td>Harga</td>
						<td><strong>
								<div class="btn btn-sm btn-success">
									<h4>Rp. <?php echo number_format($barang->harga, 0) ?>.00</h4>
								</div>
							</strong></td>
					</tr>
				</table>
				<?php
				echo form_open('belanja/add');
				echo form_hidden('id', $barang->id_barang);
				echo form_hidden('price', $barang->harga);
				echo form_hidden('name', $barang->nama_barang);
				echo form_hidden('name', $barang->ketersediaan);
				echo form_hidden('redirect_page', str_replace('index.php/', '', current_url()));
				?>
				<div class="mt-4">
					<div class="row">
						<div class="col-sm-2">
							<input type="number" name="qty" class="form-control" value="1" min="1">
						</div>
						<div class=" col-sm-8">
							<button type="submit" class="btn btn-primary btn-flat swalDefaultSuccess">
								<i class="fas fa-cart-plus fa-lg mr-2"></i>
								Tambah Ke Keranjang
							</button>
						</div>
					</div>
				</div>
				<?php echo form_close(); ?>

				<div class="mt-4 product-share">
				</div>

			</div>
		</div>

	</div>
	<!-- /.card-body -->
</div>
<!-- /.card -->
<!-- jQuery -->

<script src="<?= base_url() ?>template/plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url() ?>template/dist/js/demo.js"></script>
<script type="text/javascript">
	$(function() {
		const Toast = Swal.mixin({
			toast: true,
			position: 'top-end',
			showConfirmButton: false,
			timer: 5000
		});

		$('.swalDefaultSuccess').click(function() {
			Toast.fire({
				icon: 'success',
				title: 'Barang Berhasil Ditambahkan Ke Keranjang !!!'
			})
		});
	});
</script>