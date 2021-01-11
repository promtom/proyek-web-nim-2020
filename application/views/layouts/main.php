<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $judul?>
    </title>
    <link href='https://use.fontawesome.com/releases/v5.8.2/css/all.css' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css');?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/datatables.min.css');?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/fix01.css');?>">
</head>
<body>


    <div class = "container my-5"> 
        <div class="card">
            <div class="card-header">
                <h1 class="display-4">&diamondsuit; <?= $konten?> &diamondsuit;</h1>
            </div>
            <div class="card-body">
                <?php	
                    if(isset($_view) && $_view)
                    $this->load->view($_view);
                ?>
            </div>
        </div>
    </div>
    
    <!-- Jquery -->
    <script src="<?= base_url('assets/js/jquery.js');?>"></script>
    <!-- Bootstrap Min -->
    <script src="<?= base_url('assets/js/bootstrap.min.js');?>"></script>
</body>
</html>