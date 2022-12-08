<?php
include('../includes/config.php')
?>
<?php
include('header.php')
?>
<?php
include('side_bar.php')
?>
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0" text-dark>Admin Dashboard</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Admin</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <!-- Info boxes -->
    <div class="row">
      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box">
          <span class="info-box-icon bg-info elevation-1"><i class="fas fa-graduation-cap"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Total Students</span>
            <span class="info-box-number">
              2000
            </span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
          <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-users"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Total Teachers</span>
            <span class="info-box-number">50</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->

      <!-- fix for small devices only -->
      <div class="clearfix hidden-md-up"></div>

      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
          <span class="info-box-icon bg-success elevation-1"><i class="fas fa-book-open"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Total Courses</span>
            <span class="info-box-number">100</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
          <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-question"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">New Enqueries</span>
            <span class="info-box-number">10</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
    </div>

    <!--/. container-fluid -->
</section>
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header py-2">
            <h3 class="text-center">Event Notice</h3>
          </div>
          <div class="card-body">
            <div class="table-responsive bg-white">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>S.No.</th>
                    <th>Event Notice</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $count = 1;
                  $query = mysqli_query($db, "SELECT * FROM files Where type = 'event'");

                  while ($info = $query->fetch_assoc()) {

                  ?>
                    <tr>
                      <td><?= $count++ ?></td>
                      <td><?php echo "{$info['details']}" ?> </td>
                    </tr>
                  <?php } ?>

                </tbody>
              </table>
              <div class="text-right">
                <a href="events.php" class="btn btn-primary">Visit Event Notice Board</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header py-2">
            <h3 class="text-center">Important Notice</h3>
          </div>
          <div class="card-body">
            <div class="table-responsive bg-white">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>S.No.</th>
                    <th>Notice</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $count = 1;
                  $query = mysqli_query($db, "SELECT * FROM files Where type = 'notice'");

                  while ($info = $query->fetch_assoc()) {

                  ?>
                    <tr>
                      <td><?= $count++ ?></td>
                      <td><?php echo "{$info['details']}" ?> </td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
              <div class="text-right">
                <a href="notice_board.php" class="btn btn-primary">Visit Notice Board</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->
    </div>
  </div>
</section>
<!-- /.content -->


<?php
include('footer.php')
?>