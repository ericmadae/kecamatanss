<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <link rel="stylesheet" href="<?= base_url('assets/backend') ?>/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/backend') ?>/css/styles.min.css">
</head>

<body>
    <div class="register-photo">
        <div class="form-container">
            <div class="image-holder"></div>
            <form method="post" action="<?= base_url('index.php/dashboard/ubahuser') ?>">
                <h2 class="text-center"><strong>UBAH</strong><br> Username atau password</h2>
                <div class="form-group">
                    <input type="text" name="id" value="<?= $user->id ?>" hidden>
                    <input class="form-control" type="text" name="username" placeholder="Username" value="<?= $user->username ?>"></div>
                <div class="form-group"><input class="form-control" type="password" id="password" name="password" placeholder="Password"></div>
                <div class="form-group"><input class="form-control" type="password" id="password1" placeholder="Konfirmasi password" name="password1"></div>
                <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Ubah</button></div>
                <br>
                <div class="form-group">
                    <center>
                        <h6 id="error"><?= $this->session->flashdata('salah'); ?></h6>
                    </center>
                </div>
            </form>
        </div>
    </div>
    <script src="<?= base_url('assets/backend') ?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/backend') ?>/vendor/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>