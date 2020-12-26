<!-- Sidebar -->
<?php
	if($this->session->foto){
		$foto = 'assets/img/profil/'.$this->session->foto;
	}
	else $foto = 'assets/img/profil/profil0.png';
?>

<div class="sidebar sidebar-style-2">
	<div class="sidebar-wrapper scrollbar scrollbar-inner">
		<div class="sidebar-content">
			<div class="user">
				<div class="avatar-sm float-left mr-2">
					<img src="<?= base_url($foto) ?>" alt="..." class="avatar-img rounded-circle">
				</div>
				<div class="info">
					<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
						<span>
							<?= wordwrap($this->session->name, 21,"<br>\n");?>
							<span class="user-level">
								<?php
									if($this->session->status==1) echo("Admin");
									else echo("User");
								?>
							</span>
							<span class="caret"></span>
						</span>
					</a>
					<div class="clearfix"></div>
					<div class="collapse in" id="collapseExample">
						<ul class="nav">
							<li>
								<a href="#" data-toggle="modal" data-target="#changepasswordModal">
									<span class="link-collapse">Change Password</span>
								</a>
							</li>
							<li>
								<a href="<?= base_url('home/logout'); ?>" id="btn-logout">
									<span class="link-collapse">Logout</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<ul class="nav nav-primary">
				<li class="nav-item <?= isset($mHome) ? 'active' : ''; ?>">
					<a href="<?= base_url('home'); ?>">
						<!-- <i class="fas fa-tachometer-alt"></i> -->
						<i class="fas fa-home"></i>
						<p>Dashboard</p>
					</a>
				</li>
				<?php if ($this->session->status==1) : ?>
				<li class="nav-section">
					<span class="sidebar-mini-icon">
						<i class="fas fa-ellipsis-h"></i>
					</span>
					<h4 class="text-section">Menu Admin</h4>
				</li>
				<li class="nav-item <?= isset($mUser) ? 'active' : ''; ?>">
					<a href="<?= base_url('user'); ?>">
						<i class="fas fa-users-cog"></i>
						<!-- <i class="fas fa-chess"></i> -->
						<p>User</p>
					</a>
				</li>
        	<?php endif; ?>
				<li class="nav-section">
					<span class="sidebar-mini-icon">
						<i class="fas fa-ellipsis-h"></i>
					</span>
					<h4 class="text-section">Menu</h4>
				</li>
				<li class="nav-item <?= isset($mDsn) ? 'active' : ''; ?>">
					<a href="<?= base_url('dsn'); ?>">
						<i class="fas fa-user-tie"></i>
						<p>Dosen</p>
					</a>
				</li>
				<li class="nav-item <?= isset($mMhs) ? 'active' : ''; ?>">
					<a href="<?= base_url('mhs'); ?>">
						<i class="fas fa-user-graduate"></i>
						<p>Mahasiswa</p>
					</a>
				</li>
				<li class="nav-item <?= isset($mMatkul) ? 'active' : ''; ?>">
					<a href="<?= base_url('matkul'); ?>">
						<!-- <i class="fal fa-users-class"></i> --> <!-- harus pro T^T -->
						<i class="fas fa-graduation-cap"></i>
						<p>Matkul</p>
					</a>
				</li>
			</ul>
		</div>
	</div>
</div>
<!-- End Sidebar -->