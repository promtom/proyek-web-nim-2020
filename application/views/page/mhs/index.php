<?php $i = 1; $j=0; ?>
<div class="page-inner">
	<div class="page-header">
		<!-- Start Breadcrumb -->
		<h4 class="page-title">Data Mahasiswa</h4>
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
				<a href="#">Data Mahasiswa</a>
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
						<h4 class="card-title">Data Mahasiswa</h4>
						<a class="btn btn-primary btn-round ml-auto" href="<?= base_url('mhs/add'); ?>">
							<i class="fa fa-plus"></i> Tambah Data
						</a>
					</div>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-hover table-bordered" id="tabel1">
							<thead class="thead-light">
								<tr>
									<th>No</th>
									<th>NIM</th>
									<th>Nama</th>
									<th>Tempat Lahir</th>
									<th>Tanggal Lahir</th>
									<th>Jurusan</th>
									<th>IPK</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php if ($mahasiswa) : ?>
								<?php foreach ($mahasiswa as $row) : ?>
								<tr>
									<td><?= $i++ ?></td>
									<td><?= $row["NIM"]; ?></td>
									<td><?= $row["mhs_nama"]; ?></td>
									<td><?= $row["mhs_tpt_lhr"]; ?></td>
									<td><?= $row["mhs_tgl_lhr"]; ?></td>
									<td>	
									<?php foreach ($jurusan as $u) : ?>
										<?php 
											if($row["mhs_jurusan"]==$u["jurusan_id"]){
												$j=1; echo($u["jurusan_nama"]);break;
											}
										?>
									<?php endforeach ?>
									<?php
										if($j==0) echo("DATA NOT FOUND"); $j=0;
									?>
									</td>
									<td><?= $row["mhs_ipk"]; ?></td>
									<td>
										<div class="">
											<a class="btn btn-outline-primary btn-sm" title="Ubah Data" href="<?php echo site_url('mhs/edit/'.$row['NIM']); ?>">
												<i class="fas fa-edit" aria-hidden="true"></i>
											</a>
											<a class="btn btn-outline-danger btn-sm" title="Hapus Data" href="<?php echo site_url('mhs/delete/'.$row['NIM']); ?>" id="btn-hapus">
												<i class="fas fa-trash" aria-hidden="true"></i>
											</a>
										</div>
									</td>
								</tr>
								<?php endforeach ?>
								<?php else : ?>
								<tr>
									<td colspan="7" class="text-center">Dont have any data</td>
								</tr>
								<?php endif; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
