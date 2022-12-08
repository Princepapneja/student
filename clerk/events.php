<?php
include('../includes/config.php')
?>
<?php
if (isset($_POST['submit'])) {
    $name= $_POST['name'];
    $details= $_POST['details'];
    $type = 'event';
    $file = $_FILES['file']['name'];
    $dst = "../dist/pdfs/" . $file;
    $query = mysqli_query($db, "INSERT INTO files (`name`,`file`,`type`,`details`) VALUES ('$name','$file','$type','$details')") or die('DB Error');
    header('location:events.php');

    if ($query) {
        move_uploaded_file($_FILES['file']['tmp_name'], $dst);
    }
}
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
error_reporting(0); 
    if ($_GET['id']) {
        $id = $_GET['id'];
    
        $sql = mysqli_query($db,"DELETE FROM files WHERE id='$id'");
        if ($sql) {
            header("location:events.php");
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
                <h1 class="m-0" text-dark>Events</h1>
                <a href="events.php?action=add-new" class="btn btn-primary btn-sm">Add New</a>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Clerk</a></li>
                    <li class="breadcrumb-item active">Events</li>
                </ol>
            </div><!-- /.col -->

        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Info boxes -->
        <?php if ($_GET['action'] == 'add-new') { ?>
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-header py-2">
                        <h3 class="card-title">
                            Add New Event Notice

                        </h3>
                    </div>
                    <div class="card-body">
                   
                      
                        <form action="events.php" method="post" enctype="multipart/form-data">
                        <label for="name">Name</label>
                            <input type="text" name="name" required placeholder="Enter File Name" class="form-control">
                            <br>
                            <label for="details">Details</label>
                            <textarea name="details" required placeholder="Notice Details" class="form-control"></textarea>
                            <br> 
                            <label for="file">Upload File:</label>
                            <input type="file" required name="file">
                            <br>
                            <br>
                            <div class="">
                            <button type="submit" name="submit" class="btn btn-primary ">Upload</button>
                            </div> 
                        </form>
                    </div>
                </div>
            </div>
            <?php }  else{ ?>
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
                                        <th>Event Details</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    $count = 1;
                                    $query2 = mysqli_query($db, "SELECT * FROM files WHERE type='event'");

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
                                                <a href="events.php?file=<?php echo $info['file'] ?>"  class="btn btn-xs btn-info"><i class=" fa fa-solid fa-download"></i> Download</a>
                                                
                                                <a href="events.php?id=<?php echo $info['id'] ?>"  class="btn btn-xs btn-danger"><i class="fa fa-trash fw"></i> Delete</a>
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
            <?php }
                                    ?>

        </div>
        <!-- /.row -->
    </div>
    <!--/. container-fluid -->
</section>
<!-- /.content -->
<?php
include('footer.php')
?>