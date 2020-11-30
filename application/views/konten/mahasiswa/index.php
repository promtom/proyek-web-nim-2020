<?php $i = 1; ?>
<div class="">
    <div class="row mb-3">
        <div class="col">
            <div class="pull-right">
                <a href="<?php echo site_url('mahasiswa/add'); ?>" class="btn btn-success btn-sm">
                    <i class="fas fa-plus"></i> add characters
                </a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="table-responsive-md">
                <table class="table table-hover table-light table-striped" id="tabel1">
                    <thead class="thead-dark">
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
                        <?php foreach ($mahasiswa as $row) : ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $row["NIM"]; ?></td>
                                <td><?= $row["mhs_nama"]; ?></td>
                                <td><?= $row["mhs_tpt_lhr"]; ?></td>
                                <td><?= $row["mhs_tgl_lhr"]; ?></td>
                                <td><?= $row["mhs_jurusan"]; ?></td>
                                <td><?= $row["mhs_ipk"]; ?></td>
                                <td>
                                    <div class="">
                                        <a class="btn btn-outline-primary btn-sm" title="Ubah Data" 
                                        href="<?php echo site_url('mahasiswa/edit/'.$row['NIM']); ?>">
                                            <i class="fas fa-edit" aria-hidden="true"></i>
                                        </a>
                                        <a class="btn btn-outline-danger btn-sm" title="Hapus Data" 
                                        href="<?php echo site_url('mahasiswa/delete/'.$row['NIM']); ?>" onclick="return confirm('Are you sure?');">
                                            <i class="fas fa-trash" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table> 
            </div> 
        </div>
    </div>
</div>

<script src="<?= base_url('asset/js/jquery-3.5.1.min.js')?>"></script>
<script src="<?= base_url('asset/js/datatables.min.js')?>"></script>

<script>
    $(document).ready( function () {
        $('#tabel1').DataTable();
    } );
</script>