<?php
include('../includes/config.php')
?>
<?php
error_reporting(0);
if (isset($_GET['action']) && $_GET['action'] == 'delete') {
    if ($_GET['id']) {
        $id = $_GET['id'];

        $sql = mysqli_query($db, "DELETE FROM query WHERE id='$id'");
        if ($sql) {
            header("location:queries.php");
        }
    }
}

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
                <h1 class="m-0" text-dark>Queries</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Clerk</a></li>
                    <li class="breadcrumb-item active">Queries</li>
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
                            Events
                        </h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive bg-white">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>S.No.</th>
                                        <th>Date</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone Number</th>
                                        <th>Query</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    $count = 1;
                                    $query2 = mysqli_query($db, "SELECT * FROM query");

                                    while ($info = mysqli_fetch_assoc($query2)) {
                                    ?>
                                        <tr>
                                            <td><?= $count++ ?></td>
                                            <td><?php
                                                echo "{$info['date']}";
                                                ?></td>
                                                <td><?php
                                                echo "{$info['name']}";
                                                ?></td>
                                                
                                                <td><?php
                                                echo "{$info['email']}";
                                                ?></td>
                                                <td><?php
                                                echo "{$info['phone']}";
                                                ?></td>
                                                <td><?php
                                                echo "{$info['query']}";
                                                ?></td>
                                            <td>
                                                <a href="queries.php?action=delete&id=<?php echo $info['id'] ?>"  class="btn btn-xs btn-danger"><i class=" fa fa-solid fa-trash"></i> Delete</a>
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