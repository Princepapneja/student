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
                <h1 class="m-0" text-dark>Faculty Details</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Student</a></li>
                    <li class="breadcrumb-item active">Faculty Details</li>
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
            <div class="col-lg-12">
                <div class="card">

                    <div class="card-header py-2">
                        <h3 class="card-title">
                            Faculty
                        </h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive bg-white">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>S.No.</th>
                                        <th>Type</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone Number</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    $count = 1;
                                    $query = mysqli_query($db, "SELECT * FROM accounts WHERE type!='student'");

                                    while ($info = mysqli_fetch_assoc($query)) {
                                    ?>
                                        <tr>
                                            <td><?= $count++ ?></td>
                                            <td><?php
                                                echo ucfirst("{$info['type']}");
                                                ?></td>
                                                <td><?php
                                                echo ucwords("{$info['name']}");
                                                ?></td>
                                                <td><?php
                                                echo "{$info['email']}";
                                                ?></td>
                                            <td>
                                            <?php
                                                echo "{$info['phone']}";
                                                ?>
                                                </td>
                                        </tr>
                                    <?php }
                                    ?>
                                </tbody>


                            </table>

                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.row -->
    </div>
    <!--/. container-fluid -->
</section>
<!-- /.content -->
<?php
include('footer.php')
?>