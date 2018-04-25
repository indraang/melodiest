<!DOCTYPE html>
<html lang="en">
  <head>
		<title>Lupa Sandi</title>


	<link href="<?= site_url();?>assets_admin/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?= site_url();?>assets_admin/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	
	<style media="screen">
	body{
		background : #00252a;
	}
	.form{
		margin-top : 10%;
	}
	.header{
		font-size :40px;
		color :#f7f7f7;
	}
	.header .fa{
		border: 2px solid #fcfcfc;
		border-radius : 50%;
		padding : 5px;
	}
	.container{
		padding-top :5%;
	}
	.form-control{
		padding :20px 10px;
		font-size : 20px;
	}
	.btn{
		padding : 5px 20px;
		font-size : 16px;
		border-radius :0px;
	}


	</style>
   </head>

   <body>
   	<div class="container">
   		<center>
   			<span class="header"><i class="fa fa-shopping-cart"></i>Indradev</span>
   		</center>
   		<div class="col-md-6 col-sm-12 col-md-offset-3">
   			<?php
   			if($this->session->flashdata('alert')){
   				echo '<div class="alert alert-warning alert-message">';
   				echo $this->session->flashdata('alert');
   				echo '</div>';
   			}
   			   echo validation_errors('<p style="color:red">','</p>');
   			
   			?>
   			<form class="form" action="" method="post">

   				<div class="panel panel-primary">
   					<div class="panel-heading"><h4>Reset Password</h4></div>
                  <div class="panel-body">
   						<div class="form-group">
   							<label>Password Baru</label>
   							<input type="password" name="psw1"
                         class="form-control" placeholder="Password Baru">
   						</div>

                     <div class="form-group">
                        <label>Ketik Ulang</label>
                        <input type="password" name="psw2"
                         class="form-control" placeholder="Ketik Ulang">
                     </div>

   						<div class="form-group" style="text-align:right">
   							<button type="submit" name="simpan" value="Simpan" class="btn btn-primary">Simpan Perubahan</button>
   							<a href="<?= site_url(); ?>login" class="btn btn-default">Sign In</a>
   						</div>
   					</div>
   				</div>
   				
   			</form>
   		</div>
   	</div>
   	<script src="<?= site_url(); ?>assets_admin/js/jquery.min.js"></script>
   	<script src="<?= site_url(); ?>assets_admin/js/bootstrap.min.js"></script>
   	<script type="text/javascript">
   		$('.alert-message').alert().delay(3000).slideUp('slow');
   	</script>
   </body>	
</html>
