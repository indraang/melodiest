<!DOCTYPE html>
<html>
<head>
	<title>FORM</title>
	</head>
	<body>
		<link href="<?= site_url();?>assets_admin/css/bootstrap.css" rel="stylesheet">
		<link href="<?= site_url();?>assets_admin/css/style.css" rel="stylesheet">
	<form action="" method="post">
	  <h1><span>Sign</span> In</h1>
	  <?php 
	  if($this->session->flashdata('alert')){
	  	echo '<div class="alert alert-warning alert-message">';
	  	echo $this->session->flashdata('alert');
	  	echo '</div>';
	  }
	  if($this->session->flashdata('success')){
	  	echo '<div class="alert alert-success alert-message">';
	  	echo $this->session->flashdata('success');
	  	echo '</div>';
	  }
	  ?>
	  <input placeholder="Masukkan Username" type="text" name="username">
	  <input placeholder="Masukkan Password" type="password" name="password">
	  <button type="submit" name="submit" value="Submit" class="btn">Log in</button>
	  <!-- <div class="social">
	  <button class="tw btn">Twitter</button>
	  <button class="fb btn">Facebook</button>
	  <button class="google fb btn">Google+</button>
	  </div> -->
	</form>

	<footer>
	  <h5>Lupa Sandi ? klik <a href="<?= base_url();?>lupa_pass">disini</a></h5>
	</footer>
	<script src="<?= site_url();?>assets_admin/js/jquery.min.js"></script>
	<script src="<?= site_url();?>assets_admin/js/style.js"></script>
	<script src="<?= site_url();?>assets_admin/js/bootstrap.min.js"></script>
	<script type="text/javascript">
    $('.alert-message').alert().delay(2000).slideUp('slow');
    </script>
 </body>
</html>