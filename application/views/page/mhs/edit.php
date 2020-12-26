<div class="page-inner">
	<div class="page-header">
		<!-- Start Breadcrumb -->
		<h4 class="page-title">Add Mahasiswa</h4>
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
				<a href="<?= base_url('mhs'); ?>">Data Mahasiswa</a>
			</li>
			<li class="separator">
				<i class="fas fa-chevron-right"></i>
			</li>
			<li class="nav-item">
				<a href="#">Edit Mahasiswa</a>
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
						<h4 class="card-title">Edit Mahasiswa</h4>
					</div>
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-7">
                            <?php echo form_open('mhs/edit/'.$mahasiswa['NIM'],array("class"=>"form-horizontal")); ?>
							<div class="mb-3">
								<div class="row-sm-3">
									<label for="NIM">NIM</label>
								</div>
								<div class="row-sm-9">
									<input type="number" min="0" class="form-control" name="NIM" id="NIM" placeholder="Type here" value="<?=$mahasiswa['NIM']?>" required>
								</div>
							</div>
							<div class="mb-3">
								<div class="row-sm-3">
									<label for="mhs_nama">Nama</label>
								</div>
								<div class="row-sm-9">
									<input type="text" class="form-control" name="mhs_nama" id="mhs_nama" placeholder="Type here" value="<?=$mahasiswa['mhs_nama']?>" required>
								</div>
							</div>
							<div class="mb-3">
								<div class="row-sm-3">
									<label for="mhs_tpt_lhr">Tempat lahir</label>
								</div>
								<div class="row-sm-9">
									<input type="text" class="form-control" name="mhs_tpt_lhr" id="mhs_tpt_lhr" placeholder="Type here" value="<?=$mahasiswa['mhs_tpt_lhr']?>" required>
								</div>
							</div>
							<div class="mb-3">
								<div class="row-sm-3">
									<label for="mhs_tgl_lhr">Tanggal lahir</label>
								</div>
								<div class="row-sm-9">
									<input type="date" class="form-control" name="mhs_tgl_lhr" id="mhs_tgl_lhr" placeholder="Type here" value="<?=$mahasiswa['mhs_tgl_lhr']?>" required>
								</div>
							</div>
							<div class="mb-3">
								<div class="row-sm-3">
									<label for="mhs_jurusan">Jurusan</label>
								</div>
								<div class="row-sm-9">
                                    <select class="form-control" name="mhs_jurusan" id="mhs_jurusan" required>
                                        <option disabled selected>Select Here</option>
									    <?php foreach ($jurusan as $wow) : ?>
                                        <option value="<?= $wow["jurusan_id"] ?>"><?= $wow["jurusan_nama"] ?></option>
                                        <?php endforeach ?>
                                    </select>
								</div>
							</div>
							<div class="mb-3">
								<div class="row-sm-3">
									<label for="mhs_ipk">IPK</label>
								</div>
								<div class="row-sm-10">
									<input type="number" step="any" min="0" class="form-control" name="mhs_ipk" id="mhs_ipk" placeholder="Type here" value="<?=$mahasiswa['mhs_ipk']?>" required>
								</div>
							</div>
							<div class="mb-12">
								<a href="<?= base_url('mhs'); ?>" class="btn btn-danger float-right">
									<i class="fas fa-times"></i> Batal
								</a>
								<button type="submit" class="btn btn-success float-right mr-2">
									<i class="fas fa-save"></i> Simpan
								</button>
							</div>
    						<?php echo form_close(); ?>
						</div>
						<div class="col-5">
							<label for="NIM">List NIM yang sudah ada</label> <?php $i = 1; ?>
							<div class="table-responsive">
						    <table class="table table-hover table-bordered" id="tabel1">
									<thead class="thead-dark">
										<tr>
											<th>No</th>
											<th>NIM</th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($list as $row) : ?>
										<tr>
											<td><?= $i++ ?></td>
											<td><?= $row["NIM"]; ?></td>
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