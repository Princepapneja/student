<?php
include('../includes/config.php')
?>
<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $category = $_POST['category'];
    $duration = $_POST['duration'];
    $fees = $_POST['fees'];
    $image = $_FILES['thumbnail']['name'];

    $target_dir = "../dist/uploads/";
    $target_file = $target_dir . basename($_FILES["thumbnail"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $uploadOk = 1;
    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["thumbnail"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }


    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $target_file)) {
            mysqli_query($db, "INSERT INTO courses (name,category,duration,fees,image) VALUES ('$name','$category','$duration','$fees','$image')") or die('DB Error');
            header('location:courses.php');
            $_SESSION['success_msg'] = 'Course is Uploaded Successfuly';
            exit;
        } else {
            echo "Sorry, there was an error uploading your file.";
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
                    <h1 class="m-0" text-dark>Manage Subjects</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Admin</a></li>
                        <li class="breadcrumb-item active">Subjects</li>
                    </ol>
                </div><!-- /.col -->
                <?php

                if (isset($_SESSION['success_msg'])) { ?>
                    <div class="col-12">
                        <small class="text-success" style="font-size: 16px;"><?= $_SESSION['success_msg'] ?></small>
                    </div>
                <?php
                    unset($_SESSION['success_msg']);
                }
                ?>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <?php
            if (isset($_REQUEST['action'])) { ?>
                <div class="card">
                    <div class="card-header py-2">
                        <h3 class="card-title">
                            Add New Subject
                        </h3>

                    </div>
                    <div class="card-body">

                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" placeholder="Enter Course Name" required class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="category">Category</label>
                                <select name="category" id="category" class="form-control">
                                    <option value="">Select Category</option>
                                    <option value="bachelor">Bachelor</option>
                                    <option value="master">Master</option>
                                    <option value="diploma">Diploma</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="duration">Duration</label>
                                <select name="duration" id="duration" class="form-control">
                                    <option value="">Select Duration</option>
                                    <option value="1 year">1 year</option>
                                    <option value="2 years">2 years</option>
                                    <option value="3 years">3 years</option>
                                    <option value="4 years">4 years</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="fees">Fees</label>
                                <input type="text" name="fees" placeholder="Enter Course Fees" required class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="file" name="thumbnail" id="thumbnail" required>
                            </div>
                            <button name="submit" class="btn btn-success">Submit</button>
                        </form>
                    </div>
                </div>
            <?php
            } else {
            ?>
                <!-- Info boxes -->
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">

                            <div class="card-header py-2">
                                <h3 class="card-title">
                                    Add New Subject
                                </h3>


                            </div>
                            <div class="card-body">
                                <form action="" method="post">
                                    <div class="form-group">
                                        <label for="class">Select Class</label>
                                        <select require name="class" id="class" class="form-control">
                                            <option value="">-Select Class-</option>
                                            <?php
                                            $args = array(
                                                'type' => 'class',
                                                'status' => 'publish',

                                            );
                                            $classes = get_post($args);
                                            foreach ($classes as $key => $class) {
                                            ?>
                                                <option value="<?php echo $class->id ?>"><?php echo $class->title ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group" id="section-container" style="display: none;">
                                        <label for="section">Select Section</label>
                                        <select require name="section" id="section" class="form-control">
                                            <option value="">-Select Section-</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="subject">Subject</label>
                                        <input require type="text" name="subject" id="subject" placeholder="Enter Subject Name" class="form-control">
                                    </div>
                                    <div class="form-group">

                                        <input require type="submit" name="submit" id="submit" class="btn btn-primary" value="Submit">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-header py-2">
                                <h3 class="card-title">
                                    Subjects
                                </h3>
                                <div class="card-tools">
                                    <a href="?action=add-new" class="btn btn-success btn-xs"><i class="fa fa-plus mr-2"></i>Add New</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive bg-white">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>S.No.</th>
                                                <th>Image</th>
                                                <th>Name</th>
                                                <th>Category</th>
                                                <th>Duration</th>
                                                <th>Fees</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $count = 1;
                                            $args = array(
                                                'type' => 'subject',
                                                'status' => 'publish',
        
                                            );
                                            $subjects = get_post($args);
                                            foreach ($subjects as $subject) {
                                            ?>
                                                <tr>
                                                    <td><?= $count++ ?></td>
                                                    <td><?= $subject->title?></td>
                                                    <td><?= $subject->publish_date?></td>
                                                    
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>


                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            <?php } ?>
        </div>
        <!--/. container-fluid -->
    </section>
    <!-- /.content -->
    <?php
    include('footer.php')
    ?>