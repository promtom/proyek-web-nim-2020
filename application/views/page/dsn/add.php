<div class="page-inner">
	<div class="page-header">
		<!-- Start Breadcrumb -->
		<h4 class="page-title">Add Dosen</h4>
		<ul class="breadcrumbs">
			<li class="nav-home">
				<a href="<?= base_url('home'); ?>">
					<i class="fas fa-home"></i>
				</a>
			</li>
			<li class="separator">
				<i class="fas fa-chevron-right"></i>
			</li>
			<li class="nav-item">
				<a href="<?= base_url('dsn'); ?>">Data Dosen</a>
			</li>
			<li class="separator">
				<i class="fas fa-chevron-right"></i>
			</li>
			<li class="nav-item">
				<a href="#">Add Dosen</a>
			</li>
		</ul>
		<!-- END Breadcrumb -->
	</div>
    <?php $this->load->view('layouts/2/sweetalert'); ?>
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div class="d-flex align-items-center">
						<h4 class="card-title">Add Dosen</h4>
					</div>
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-7">
					        <?php echo form_open('dsn/add',array("class"=>"form-horizontal")); ?>
							<div class="mb-3">
								<div class="row-sm-3">
									<label for="NID">NID</label>
								</div>
								<div class="row-sm-9">
									<input type="number" min="0" class="form-control" name="NID" id="NID" placeholder="Type here" required>
								</div>
							</div>
							<div class="mb-3">
								<div class="row-sm-3">
									<label for="dsn_nama">Nama</label>
								</div>
								<div class="row-sm-9">
									<input type="text" class="form-control" name="dsn_nama" id="dsn_nama" placeholder="Type here" required>
								</div>
							</div>
							<div class="mb-3">
								<div class="row-sm-3">
									<label for="dsn_tpt_lhr">Tempat lahir</label>
								</div>
								<div class="row-sm-9">
									<input type="text" class="form-control" name="dsn_tpt_lhr" id="dsn_tpt_lhr" placeholder="Type here" required>
								</div>
							</div>
							<div class="mb-3">
								<div class="row-sm-3">
									<label for="dsn_tgl_lhr">Tanggal lahir</label>
								</div>
								<div class="row-sm-9">
									<input type="date" class="form-control" name="dsn_tgl_lhr" id="dsn_tgl_lhr" placeholder="Type here" required>
								</div>
							</div>
							<div class="mb-12">
								<a href="<?= base_url('dsn'); ?>" class="btn btn-danger float-right">
									<i class="fas fa-times"></i> Batal
								</a>
								<button type="submit" class="btn btn-success float-right mr-2">
									<i class="fas fa-save"></i> Simpan
								</button>
							</div>
    						<?php echo form_close(); ?>
						</div>
						<div class="col-5">
							<label for="NID">List NID yang sudah ada</label> <?php $i = 1; ?>
							<div class="table-responsive">
						    <table class="table table-hover table-bordered" id="tabel1">
									<thead class="thead-dark">
										<tr>
											<th>No</th>
											<th>NID</th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($list as $row) : ?>
										<tr>
											<td><?= $i++ ?></td>
											<td><?= $row["NID"]; ?></td>
										</tr>
										<?php endforeach ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>