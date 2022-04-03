<!-- header -->

<?php include("header.php"); ?>
<!-- / header -->


<!-- Content wrapper -->
<div class="content-wrapper">

  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">


    <h4 class="fw-bold py-3 mb-4">
      <span class="text-muted fw-light">UI elements /</span> Alerts
    </h4>

    <!-- Dismissible Alerts -->
    <div class="col-md-12">
      <div class="card">
        <h5 class="card-header">Dismissible Alerts</h5>
        <div class="card-body">
          <?php if (isset($params)) {

            foreach ($params as $key => $value) {
          ?>
              <div class="alert alert-<?php echo $key; ?> alert-dismissible" role="alert">
                <?php echo $value; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                </button>
              </div>
          <?php }
          }; ?>








        </div>
      </div>
    </div>
    <!--/ Dismissible Alerts -->
  </div>



</div>
<!-- / Content -->


<!-- footer -->

<?php include("footer.php"); ?>
<!-- / footer -->