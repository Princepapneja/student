<?php
include('../includes/config.php')
?>
<?php
if (isset($_POST['submit'])) {
    $type = 'clerk';
    $name = $_POST['name'];
    $email = $_POST['email'];
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

    $institute = $_POST['institute'];
    $p_class = $_POST['p_class'];
    $status = $_POST['status'];
    $p_percentage = $_POST['p_percentage'];
    $year = $_POST['year'];
    $image = $_FILES['thumbnail']['name'];

    $target_dir = "../dist/uploads/";
    $target_file = $target_dir . basename($_FILES["thumbnail"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    $check_query = mysqli_query($db, "SELECT * FROM accounts WHERE email ='$email' AND unique_id='$unique_id'");
    if (mysqli_num_rows($check_query) > 0) {
        // $error = 'Email Already Exists';
        echo 'Email or Unique ID Already Exists';
    } else if (move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $target_file)){


        $query = mysqli_query($db, "INSERT INTO accounts (`type`,`name`,`email`,`password`,`unique_id`,`phone`,`address`,`country`,`pincode`,`state`,`city`,`institute`,`p_class`,`status`,`p_percentage`,`year`,`image`) Values ('$type','$name','$email','$md_password','$unique_id','$mobile','$address','$country','$pincode','$state','$city','$institute','$p_class','$status','$p_percentage','$year','$image')");
    }
    if ($query) {
        header("location:clerks.php");
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
            header("location:clerks.php");
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
                    <a href="clerks.php?action=add-new" class="btn btn-primary btn-sm">Add New</a>
                </div>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Admin</a></li>
                    <li class="breadcrumb-item active">Teachers</li>
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

<section class="content">
    <div class="content-fluid">
        <?php
        if (isset($_GET['action'])) {
        ?>
            <?php if ($_GET['action'] == 'add-new') { ?>
                <form action="#" method="post" enctype="multipart/form-data">
                    <fieldset class="border border-secondary p-3 form-group">
                        <legend class="d-inline w-auto h5">Information</legend>

                        <div class="row">
                            <div class="col-lg-12">
                            <div class="form-group">
                                <input type="file" name="thumbnail" id="thumbnail" required>
                            </div>
                              <div class="form-group">
                                    <label for="">Full Name</label>
                                    <input type="text" class="form-control" placeholder="Enter Full Name" name="name">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="">D.O.B</label>
                                    <input type="date" class="form-control" required placeholder="Enter Date of Birth" name="dob">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="text" class="form-control" placeholder="Enter Email" name="email">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="">Mobile</label>
                                            <input type="text" class="form-control" placeholder="Enter Mobile Number" name="mobile">
                                        </div>
                                    </div>
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


                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="">Unique ID.</label>
                            <input type="text" class="form-control" name="unique_id">
                        </div>
                    </div>

                    <button type="submit" name="submit" class="btn btn-primary"><span id="loader" style="display: none"><i class="fas fa-duotone fa-spinner"></i></span>Register</button>
                </form>
            <?php }
        } else { ?>
            <div class="table-responsive bg-white">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>S.No.</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>ID</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $std_id = isset($_GET['std_id']) ? $_GET['std_id'] : '';

                        $count = 1;
                        $user_query = "SELECT * FROM accounts WHERE type = 'clerk'";
                        $user_result = mysqli_query($db, $user_query);
                        while ($users = mysqli_fetch_object($user_result)) {

                        ?>

                            <tr>
                                <td><?= $count++ ?></td>
                                <td class="text-center"> <img src="../dist/uploads/<?= $users->image ?>" height="100" width="100" alt="<?= $users->name ?>" class="border"> </td>
                                <td><?= $users->name ?></td>
                                <td><?= $users->email ?></td>
                                <td><?= $users->unique_id ?></td>
                                <td>
                                    <a href="update_teachers.php?id=<?php echo $users->id ?>" class="btn btn-xs btn-info"><i class=" fa fa-solid fa-eye"></i> View</a>

                                    <a href="teachers.php?action=delete&id=<?php echo $users->id ?>" class="btn btn-xs btn-danger"><i class="fa fa-trash fw"></i> Delete</a>
                                </td>

                            </tr>
                        <?php

                        } ?>
                    </tbody>
                </table>

            </div>
        <?php
        }
        ?>
    </div>
</section>



<?php
include('footer.php')
?>