<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eror</title>
    <link href='https://use.fontawesome.com/releases/v5.8.2/css/all.css' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="<?= base_url('asset/css/bootstrap.min.css');?>">
    <link rel="stylesheet" href="<?= base_url('asset/css/datatables.min.css');?>">
    <link rel="stylesheet" href="<?= base_url('asset/css/fix01.css');?>">
</head>
<body>
    <div class="row justify-content-center my-5">
        <div class="jumbotron bg-dark">
            <h1 class="display-4 text-danger">
                <i class="fas fa-exclamation-triangle"></i> <?= $code?>
            </h1>
            <p class="lead text-warning mb-4">
                <?= $ket?>
            </p>
            <p class="text-info mb-4 ">Silahkan balik ke halaman sebelumnya.</p>
            <a class="btn btn-danger btn-lg" href="<?= site_url($back); ?>" role="button">Back</a>
        </div>
    </div>
</body>
</html>