<?php
include('../includes/config.php')
?>
<?php
if (isset($_POST['submit'])) {
    $type = 'student';
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $password = date('dmY', strtotime($dob));
    $md_password = md5($password);
    $unique_id = $_POST['unique_id'];
    $address = $_POST['address'];
    $country = $_POST['country'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $pincode = $_POST['pincode'];

    $f_name = $_POST['f_name'];
    $f_mobile = $_POST['f_mobile'];
    $m_name = $_POST['m_name'];
    $m_mobile = $_POST['m_mobile'];
    $p_address = $_POST['p_address'];
    $p_country = $_POST['p_country'];
    $p_state =  $_POST['p_state'];
    $p_city = $_POST['p_city'];
    $p_pincode =  $_POST['p_pincode'];

    $institute = $_POST['institute'];
    $p_class = $_POST['p_class'];
    $status = $_POST['status'];
    $p_percentage = $_POST['p_percentage'];
    $year = $_POST['year'];

    $class = $_POST['class'];
    $course = $_POST['course'];
    $section = $_POST['section'];
    $doa = $_POST['doa'];
    $date_add = date('Y-m-d');
    $image = $_FILES['thumbnail']['name'];

    $target_dir = "../dist/uploads/";
    $target_file = $target_dir . basename($_FILES["thumbnail"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    $check_query = mysqli_query($db, "SELECT * FROM accounts WHERE email ='$email' AND unique_id='$unique_id'");
    if (mysqli_num_rows($check_query) > 0) {
        // $error = 'Email Already Exists';
        echo 'Email or Unique ID Already Exists';
    } else if (move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $target_file)) {


        $query = mysqli_query($db, "INSERT INTO accounts (`type`,`name`,`email`,`password`,`unique_id`,`dob`,`phone`,`address`,`country`,`pincode`,`state`,`city`,`f_name`,`f_number`,`m_name`,`m_mobile`,`p_address`,`p_country`,`p_state`,`p_pincode`,`institute`,`p_class`,`status`,`p_percentage`,`year`,`class`,`course`,`section`,`p_city`,`doa`,`image`) VALUES ('$type','$name','$email','$md_password','$unique_id','$dob','$mobile','$address','$country','$pincode','$state','$city','$f_name','$f_mobile','$m_name','$m_mobile','$p_address','$p_country','$p_state','$p_pincode','$institute','$p_class','$status','$p_percentage','$year','$class','$course','$section','$p_city','$date_add','$image')") or die(mysqli_error($db));
    }
    if ($query) {
        header("location:students.php");
    }
}

?>
<?php
error_reporting(0);
if (isset($_GET['action']) && $_GET['action'] == 'delete') {
    if ($_GET['id']) {
        $id = $_GET['id'];

        $sql = mysqli_query($db, "DELETE FROM accounts WHERE id='$id'");
        if ($sql) {
            $_SESSION['success_msg']='Student Details is Deleted Succesfuly';
            header("location:students.php");
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

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <div class="d-flex">
                    <h1 class="m-0" text-dark>Manage Account</h1>
                    <a href="students.php?user=student&action=add-new" class="btn btn-primary btn-sm m-1">Add New</a>
                </div>
                <?php

            if (isset($_SESSION['success_msg'])) { ?>
                <div class="col-12">
                    <small class="text-success" style="font-size: 16px;"><?= $_SESSION['success_msg'] ?></small>
                </div>
            <?php
            }
            unset($_SESSION['success_msg']);
            ?>
              
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Admin</a></li>
                    <li class="breadcrumb-item active">Student</li>
                </ol>
            </div><!-- /.col -->
            
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <?php
        if (isset($_GET['action'])) {
        ?>
            <div class="card">
                <div class="card-body" id="form-container">
                    <?php if ($_GET['action'] == 'add-new') { ?>
                        <form action="#" method="post" enctype="multipart/form-data">
                            <fieldset class="border border-secondary p-3 form-group">

                                <legend class="d-inline w-auto h5">Student Image</legend>

                                <div class="row">

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <input type="file" name="thumbnail" id="thumbnail" required>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset class="border border-secondary p-3 form-group">
                                <legend class="d-inline w-auto h5">Student Information</legend>

                                <div class="row">

                                    <div class="col-lg-12">

                                        <div class="form-group">
                                            <label for="">Full Name</label>
                                            <input type="text" required class="form-control" placeholder="Enter Full Name" name="name">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="">D.O.B</label>
                                            <input type="date" required class="form-control" required placeholder="Enter Date of Birth" name="dob">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="">Mobile</label>
                                            <input type="text" class="form-control" placeholder="Enter Mobile Number" name="mobile">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="">Email</label>
                                            <input type="text" required class="form-control" placeholder="Enter Email" name="email">
                                        </div>
                                    </div>
                                    <!-- address -->
                                    <div class="col-lg-12">

                                        <div class="form-group">
                                            <label for="">Address</label>
                                            <input type="text" required class="form-control" placeholder="Enter Address" name="address">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="">Country</label>
                                            <input type="text" required class="form-control" placeholder="Enter Country" name="country">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="">State</label>
                                            <input type="text" required class="form-control" placeholder="Enter State" name="state">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="">City</label>
                                            <input type="text" required class="form-control" placeholder="Enter city" name="city">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="">Pincode</label>
                                            <input type="text" required class="form-control" placeholder="Enter Pincode" name="pincode">
                                        </div>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class="border border-secondary p-3 form-group">
                                <legend class="d-inline w-auto h5">Parent's Information</legend>
                                <div class="row">

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="">Father's Name</label>
                                            <input type="text" required class="form-control" placeholder="Enter Father's Name" name="f_name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="">Father's Mobile</label>
                                            <input type="text" required class="form-control" placeholder="Enter Farther's Number" name="f_mobile">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="">Mother's Name</label>
                                            <input type="text" required class="form-control" placeholder="Enter Mother's Name" name="m_name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="">Mother's Mobile</label>
                                            <input type="text" class="form-control" placeholder="Enter Mother's Number" name="m_mobile">
                                        </div>
                                    </div>

                                    <!-- address -->
                                    <div class="col-lg-12">

                                        <div class="form-group">
                                            <label for="">Address</label>
                                            <input type="text" class="form-control" placeholder="Enter Addresss" name="p_address">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="">Country</label>
                                            <input type="text" class="form-control" placeholder="Enter Country" name="p_country">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="">State</label>
                                            <input type="text" class="form-control" placeholder="Enter State" name="p_state">
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="">City</label>
                                                <input type="text" class="form-control" placeholder="Enter city" name="p_city">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="">Pincode</label>
                                            <input type="text" class="form-control" placeholder="Enter Pincode" name="p_pincode">
                                        </div>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class="border border-secondary p-3 form-group">
                                <legend class="d-inline w-auto h5">Qualification</legend>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="">Institute Name</label>
                                            <input type="text" required class="form-control" placeholder="Enter Institute Name" name="institute">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="">Class</label>
                                            <input type="text" required class="form-control" placeholder="Enter Previous Class" name="p_class">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="">Status</label>
                                            <input type="text" required class="form-control" placeholder="Enter Status" name="status">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="">Percentage</label>
                                            <input type="text" required class="form-control" placeholder="Enter Percentage" name="p_percentage">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="">Year</label>
                                            <input type="text" required class="form-control" placeholder="Enter Year" name="year">
                                        </div>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class="border border-secondary p-3 form-group">
                                <legend class="d-inline w-auto h5">Admission Details</legend>
                                <div class="row">

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="">Class</label>
                                            <input type="text"  required class="form-control" placeholder="Enter Class" name="class">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="">Course</label>
                                            <input type="text"  required class="form-control" placeholder="Enter Course" name="course">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="">Section</label>
                                            <input type="text" required class="form-control" placeholder="Enter Section" name="section">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="">Date of Addmission</label>
                                            <input type="date" required class="form-control" name="doa">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="">Unique ID.</label>
                                            <input type="text" required class="form-control" name="unique_id">
                                        </div>
                                    </div>

                                </div>
                            </fieldset>

                            <button type="submit" name="submit" class="btn btn-primary"><span id="loader" style="display: none"><i class="fas fa-duotone fa-spinner"></i></span>Register</button>
                        </form>
                    <?php
                    }
                    ?>
                </div>
            </div>
        <?php } else { ?>

            <!-- Info boxes -->
            <div class="table-responsive bg-white">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>S.No.</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Email</th>
                            <th>ID</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $std_id = isset($_GET['std_id']) ? $_GET['std_id'] : '';

                        $count = 1;
                        $user_query = 'SELECT * FROM accounts WHERE type = "student"';
                        $user_result = mysqli_query($db, $user_query);
                        while ($users = mysqli_fetch_object($user_result)) {

                        ?>

                            <tr>
                                <td><?= $count++ ?></td>
                                <td><?= $users->name ?></td>
                                <td class="text-center"> <img src="../dist/uploads/<?= $users->image ?>" height="100" width="100" alt="<?= $users->name ?>" class="border"> </td>
                                <td><?= $users->email ?></td>
                                <td><?= $users->unique_id ?></td>
                                <td>
                                    <a href="update_student.php?id=<?php echo $users->id ?>" class="btn btn-xs btn-info"><i class=" fa fa-solid fa-eye"></i> View</a>

                                    <a href="students.php?action=delete&id=<?php echo $users->id ?>" class="btn btn-xs btn-danger"><i class="fa fa-trash fw"></i> Delete</a>
                                </td>

                            </tr>
                        <?php

                        } ?>
                    </tbody>
                </table>

            </div>
            <!-- /.row -->
    </div>
<?php
        }
?>
</section>
<!-- /.content -->








<?php
include('footer.php')
?>