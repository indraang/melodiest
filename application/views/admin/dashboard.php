<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin</title>
 
    <!-- Bootstrap -->
    <link href="<?= site_url();?>assets_admin/css/bootstrap.css" rel="stylesheet">
    <!-- Dropzone -->
    <link href="<?= site_url();?>assets_admin/css/dropzone.min.css" rel="stylesheet">
    <link href="<?= site_url();?>assets_admin/css/basic.min.css" rel="stylesheet">
    <!-- Font Awesome -->
      <link href="<?= site_url();?>assets_admin/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- DataTable -->
    <link href="<?= site_url();?>assets_admin/css/dataTables.bootstrap.css" rel="stylesheet">
    <link href="<?= site_url();?>assets_admin/css/responsive.bootstrap.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="<?= site_url();?>assets_admin/css/custom.css" rel="stylesheet">
    
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <?= $nav;?>
        <!-- page content -->
        <div class="right_col" role="main"> 
        <?= $content;?>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>    
    <!--  Datatables -->
    <!-- jQUERY -->
    <script src="<?= site_url();?>assets_admin/js/jquery.min.js"></script>
    <script src="<?= site_url();?>assets_admin/js/jquery.dataTables.min.js"></script>
    <script src="<?= site_url();?>assets_admin/js/dataTables.bootstrap.min.js"></script>
    <script src="<?= site_url();?>assets_admin/js/dataTables.responsive.min.js"></script>
    <!--Dropzone-->
    <script src="<?= site_url();?>assets_admin/js/bootstrap.min.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="<?= site_url();?>assets_admin/js/custom.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?= site_url();?>assets_admin/js/dropzone.js"></script>
    <script type="text/javascript">
    $('.alert-message').alert().delay(2000).slideUp('slow');

    Dropzone.autoDiscover = false;

    var upload= new Dropzone(".dropzone",{
    url: "<?php echo base_url('barang/upload') ?>",
    maxFilesize: 2,
    method:"post",
    acceptedFiles:"image/*",
    paramName:"upload",
    dictInvalidFileType:"Type file ini tidak dizinkan",
    addRemoveLinks:true,
    });
    
     //Event ketika Memulai mengupload
    upload.on("sending",function(a,b,c){
    a.token=Math.random();
    c.append("token_foto",a.token); //Menmpersiapkan token untuk masing masing foto
    });
    </script>
  </body>
</html>
