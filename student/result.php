<?php
include('../includes/config.php')
?>
<?php

if(!empty($_GET['file']))
{
    $file = basename($_GET['file']);
    $dst = "../dist/pdfs/".$file;
    if(!empty($file) && file_exists($dst))
    {
        header("Cache-Control: public");
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=$file");
        header("Content-Type: application/zip");
        header("Content-Transfer-Encoding: binary");

        readfile($dst);
        exit;
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
                <h1 class="m-0" text-dark>Result</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Student</a></li>
                    <li class="breadcrumb-item active">Result</li>
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
                            Result
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
                                        <th>Details</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    $count = 1;
                                    $query2 = mysqli_query($db, "SELECT * FROM files WHERE type='result'");

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
                                                echo "{$info['details']}";
                                                ?></td>
                                            <td>
                                                <a href="result.php?file=<?php echo $info['file'] ?>"  class="btn btn-xs btn-info"><i class=" fa fa-solid fa-download"></i> Download</a>
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