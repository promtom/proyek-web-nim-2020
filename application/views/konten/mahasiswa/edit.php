<?php $i = 1; ?>
<?php echo form_open('mahasiswa/edit/'.$mahasiswa['NIM'],array("class"=>"form-horizontal")); ?>
<div class="row">
    <div class="col">
        <div class="mb-3">
            <div class="row-sm-3">
                <label for="mhs_nama">NIM</label>
            </div>
            <div class="row-sm-9">
                <input type="number" class="form-control" name="NIM" id="NIM" placeholder="Type here" value="<?=$mahasiswa['NIM']?>" required>
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
                <input type="text" class="form-control" name="mhs_jurusan" id="mhs_jurusan" placeholder="Type here" value="<?=$mahasiswa['mhs_jurusan']?>" required>
            </div>
        </div>
        <div class="mb-3">
            <div class="row-sm-3">
                <label for="mhs_ipk">IPK</label>
            </div>
            <div class="row-sm-10">
                <input type="number" step="any" class="form-control" name="mhs_ipk" id="mhs_ipk" placeholder="Type here" value="<?=$mahasiswa['mhs_ipk']?>" required>
            </div>
        </div>
        <button type="submit" class="btn btn-primary float-right" name="add" id="add">submit</button>
    </div>
    <div class="col">
        <div class="table-responsive-md">
            List NIM yang sudah ada
            <table class="table table-hover table-light table-striped">
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
    
<?php echo form_close(); ?>
