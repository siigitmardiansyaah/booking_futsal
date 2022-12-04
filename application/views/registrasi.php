
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Registrasi Member Baru</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?= base_url() ?>upload/futsal.png">
		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="<?php echo base_url('registrasi')?>/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="<?php echo base_url('registrasi')?>/css/style.css">
	</head>

	<body>

		<div class="wrapper" style="background-image: url('images/bg1.png');">
			<div class="inner">
				<div class="image-holder">
					<img src="images/playing-sports-sticker-player-futsal.png" alt="">
				</div>
        <form method="post" action="<?php echo base_url('registrasi/index') ?>" class="user">
					<h3>Form Registrasi</h3>
					<div class="form-wrapper">
          <input type="text" class="form-control" id="exampleInputEmail" placeholder="Masukan Nama Anda" name="nama">
            <?php echo form_error('nama','<div class="text-danger small ml-2">','</div>') ?>
            <i class="zmdi zmdi-account"></i>
					</div>
					<div class="form-wrapper">
          <input type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="Username Anda" name="username">
                  <?php echo form_error('username','<div class="text-danger small ml-2">','</div>') ?>						<i class="zmdi zmdi-account"></i>
					</div>
					<div class="form-wrapper">
          <input type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Anda" name="email">
                  <?php echo form_error('email','<div class="text-danger small ml-2">','</div>') ?>
                  <i class="zmdi zmdi-email"></i>

					</div>
					<div class="form-wrapper">
          <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" name="password_1">
                    <?php echo form_error('password_1','<div class="text-danger small ml-2">','</div>') ?>
                    						<i class="zmdi zmdi-lock"></i>
					</div>
					<div class="form-wrapper">
          <input type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Ulangi Password" name="password_2">
						<i class="zmdi zmdi-lock"></i>
					</div>
					<button type="submit">Register
						<i class="zmdi zmdi-arrow-right"></i>
					</button>
          <br/>
          <div class="text-center">
                <a class="small" href="<?php echo base_url('auth/login') ?>">Sudah Punya Akun? Silahkan Login!</a>
              </div>
				</form>
			</div>
		</div>
    
		
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>