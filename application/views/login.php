<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="andi hoerudin">
  <meta name="author" content="andi hoerudin">
  <title>ANDI hoerudin</title>
  <!-- Bootstrap core CSS-->
  <link href="<?php echo base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url() ?>assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="<?php echo base_url() ?>assets/css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">
   <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
      <?php echo form_open('Auth') ?>
            <div class="form-group">
                <label for="email">Username</label>
                <input type="text" class="form-control" name="username"  required="">
             </div>
            <div class="form-group">
                <label for="password" class="control-label">Password</label>
                <input id="password" type="password" name="password" class="form-control" required="">
            </div>
            <button class="btn btn-primary btn-block" name="submit" type="submit">Login</button>
        <?php echo form_close() ?>
    </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url() ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
