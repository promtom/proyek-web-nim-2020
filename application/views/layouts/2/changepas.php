<div class="modal fade" id="changepasswordModal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="dialog">
		<div class="modal-content">
			<form action="<?= base_url('home/editPass/').$this->session->userdata('id_u'); ?>" method="post">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Ganti Password</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label for="password">Password Baru</label>
						<input type="hidden" name="id" value="<?= $this->session->userdata('id_u'); ?>">
						<input type="password" class="form-control" id="password" name="password" aria-describedby="importInfo" required>
					</div>
				</div>
				<div class="modal-footer">
					<button class="btn btn-secondary float-left" type="button" data-dismiss="modal">Batal</button>
					<button class="btn btn-primary" type="submit">Ganti Password</button>
				</div>
			</form>
		</div>
	</div>
</div>