<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Sistem Monitoring Air PDAM Bone Bolango</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?php echo base_url('assets') ?>/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url('assets') ?>/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="<?php echo base_url('assets') ?>/vendors/css/vendor.bundle.addons.css">
  <link rel="stylesheet" href="<?php echo base_url('assets') ?>/vendors/iconfonts/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url('assets') ?>/custom/font.css">
  <!-- endinject -->
  <!-- plugin css for this page -->

	<?php if (isset($plugincss)):
        	foreach ($plugincss as $p):?>
						<script src="<?php echo base_url('assets/'.$p) ?>"></script>
	<?php 	endforeach;
        endif; ?>

  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo base_url('assets') ?>/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url('assets') ?>/custom/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?php echo base_url('assets') ?>/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- BATAS NAVBAR -->
		<?php $this->load->view($navbar) ?>
    <!-- BATAS NAVBAR -->

    <div class="container-fluid page-body-wrapper">
      <!-- BATAS SIDEBAR -->
      <!-- BATAS SIDEBAR -->
      <div class="main-panel">
				<!-- BATAS CONTENT -->
        <div class="content-wrapper">
					<?php $this->load->view($content) ?>
        </div>
				<!-- BATAS CONTENT -->

        <!-- BATAS FOOTER -->
        <?php $this->load->view($footer) ?>
        <!-- BATAS FOOTER -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="<?php echo base_url('assets') ?>/vendors/js/vendor.bundle.base.js"></script>
  <script src="<?php echo base_url('assets') ?>/vendors/js/vendor.bundle.addons.js"></script>
  <script src="<?php echo base_url('assets') ?>/vendors/jquery/jquery.min.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->

	<?php if (isset($pluginjs)):
        	foreach ($pluginjs as $p):?>
	<script src="<?php echo base_url('assets/'.$p) ?>"></script>
	<?php 	endforeach;
        endif; ?>

  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="<?php echo base_url('assets') ?>/js/off-canvas.js"></script>
  <script src="<?php echo base_url('assets') ?>/js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->

	<?php if (isset($customjs)):
        	foreach ($customjs as $js):?>
	<script src="<?php echo base_url('assets/custom/js/'.$js) ?>"></script>
	<?php 	endforeach;
        endif; ?>

  <!-- End custom js for this page-->
</body>

</html>
