<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Bootstrap core CSS-->
    <link href="<?= base_url('assets/backend') ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/backend') ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/backend') ?>/css/sb-admin.css" rel="stylesheet">

  </head>

  <body class="bg-dark">

    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">Login</div>
        <div class="card-body">
          <?= form_open('login/aksi_login'); ?>
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="Username" class="form-control" placeholder="username" required="required" name="username" autofocus="autofocus">
                <label for="Username">Username</label>
              </div>
            </div>
            <div class="form-group">
              <select name="jabatan" class="form-control" required="required">
                <option value="">JABATAN</option>
                <option value="camat">CAMAT</option>
                <option value="sekretaris">SEKRETARIS</option>
                <option value="kasubag_pk">KASUBAG PROGRAM dan KEU</option>
                <option value="kasubag_uk">KASUBAG UMUM ASET dan KEPEG</option>
                <option value="kasi_tp">KASI TATA PEMERINTAH</option>
                <option value="kasi_pmd">KASI PMD</option>
                <option value="kasi_sos">KASI SOSIAL</option>
                <option value="kasi_pu">KASI PELAYANAN UMUM</option>
                <option value="kasi_tr">KASI TRANTIBUN</option>
              </select>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="required" name="password">
                <label for="inputPassword">Password</label>
              </div>
            </div>
            <button class="btn btn-primary btn-block" type="submit" name="submit">Login</button>
          </form>
          <div class="text-center">
          	<br>
            <h6 style="color: #A50737"><?= $this->session->flashdata('error'); ?></h6>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('assets/backend') ?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/backend') ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets/backend') ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

  </body>

</html>
