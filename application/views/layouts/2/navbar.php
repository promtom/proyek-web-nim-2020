<!-- Navbar Header -->
<?php
	$user = substr($this->session->name,0,20);
	if(strlen($this->session->name)>20) $user = $user.'...';
	if($this->session->foto){
		$foto = 'assets/img/profil/'.$this->session->foto;
	}
	else $foto = 'assets/img/profil/profil0.png';
?>

<nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">
	<div class="container-fluid">
		<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
			<li class="nav-item dropdown hidden-caret">
				<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
					<div class="avatar-sm">
						<img src="<?= base_url($foto) ?>" alt="..." class="avatar-img rounded-circle">
					</div>
				</a>
				<ul class="dropdown-menu dropdown-user animated fadeIn">
					<div class="dropdown-user-scroll scrollbar-outer">
						<li>
							<div class="user-box">
								<div class="avatar-lg"><img src="<?= base_url($foto) ?>"
										alt="image profile" class="avatar-img rounded"></div>
										
								<div class="u-text">
									<h4><?=$user?></h4>
									<a href="#" href="#" data-toggle="modal" data-target="#changepasswordModal"
										class="btn btn-xs btn-secondary btn-sm">Change Password</a>
								</div>
							</div>
						</li>
						<li>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="<?= base_url('home/logout'); ?>" id="btn-logout">
								<span class="link-collapse">Logout</span>
							</a>
						</li>
					</div>
				</ul>
			</li>
		</ul>
	</div>
</nav>
<!-- End Navbar -->
