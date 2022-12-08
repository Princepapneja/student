<?php
include('../includes/config.php')
?>
<?php
$id = $_GET['id'];

$result = mysqli_query($db, "SELECT * FROM accounts WHERE id='$id'");

$info = $result->fetch_assoc();
if (isset($_POST['update_details'])) {
    $name = $_POST['name'];
    $type = 'clerk';
    $email = $_POST['email'];
    $unique_id = $_POST['unique_id'];
    $mobile = $_POST['phone'];
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
    move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $target_file);


    if ($image) {
        
        $query = mysqli_query($db, "UPDATE accounts SET name='$name',email='$email', unique_id= '$unique_id',type='$type',phone='$mobile',address='$address',country='$country',pincode='$pincode',state='$state',institute='$institute',p_class='$p_class',status='$status',p_percentage='$p_percentage',year='$year',image='$image' WHERE id='$id'");
    } else {

        $query = mysqli_query($db, "UPDATE accounts SET name='$name',email='$email', unique_id= '$unique_id',type='$type',phone='$mobile',address='$address',country='$country',pincode='$pincode',state='$state',institute='$institute',p_class='$p_class',status='$status',p_percentage='$p_percentage',year='$year' WHERE id='$id'");
    }
    if ($query) {

        $_SESSION['message'] = 'clerk Details is Updated Succesfuly';
        header("location:clerk.php");
    }
}


?>
<?php
include('header.php')
?>
<?php
include('side_bar.php')
?>

<div class="card">
    <div class="card-body" id="form-container">
        <form action="#" method="post" enctype="multipart/form-data">
            <fieldset class="border border-secondary p-3 form-group">

                <legend class="d-inline w-auto h5">Image</legend>

                <div class="row">

                    <div class="col-lg-4">

                        <div class="form-group">
                            <input type="file" name="thumbnail" id="thumbnail">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="file">Old Image:</label>
                            <img height="100px" width="100px" src="../dist/uploads/<?php echo "{$info['image']}"; ?>" alt="Clerk Image">
                        </div>
                    </div>
                </div>
            </fieldset>
            <fieldset class="border border-secondary p-3 form-group">

                <legend class="d-inline w-auto h5">Information</legend>

                <div class="row">

                    <div class="col-lg-12">

                        <div class="form-group">
                            <label for="">Full Name</label>
                            <input type="text" class="form-control" required placeholder="Enter Full Name" name="name" value=" <?php echo "{$info['name']}"; ?>">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="">Mobile</label>
                            <input type="text" class="form-control" placeholder="Enter Mobile Number" name="phone" value=" <?php echo "{$info['phone']}"; ?>">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" class="form-control" placeholder="Enter Email" name="email" value=" <?php echo "{$info['email']}"; ?>">
                        </div>
                    </div>
                    <!-- address -->

                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="">Country</label>
                            <input type="text" class="form-control" placeholder="Enter Country" name="country" value=" <?php echo "{$info['country']}"; ?>">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="">State</label>
                            <input type="text" class="form-control" placeholder="Enter State" name="state" value=" <?php echo "{$info['state']}"; ?>">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="">City</label>
                            <input type="text" class="form-control" placeholder="Enter city" name="city" value="<?php echo "{$info['city']}"; ?>">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="">Pincode</label>
                            <input type="text" class="form-control" placeholder="Enter Pincode" name="pincode" value=" <?php echo "{$info['pincode']}"; ?>">
                        </div>
                    </div>
                    <div class="col-lg-12">

                        <div class="form-group">
                            <label for="">Address</label>
                            <input type="text" class="form-control" placeholder="Enter Address" name="address" value=" <?php echo "{$info['address']}"; ?>">
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
                            <input type="text" class="form-control" placeholder="Enter Institute Name" name="institute" value=" <?php echo "{$info['institute']}"; ?>">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="">Class</label>
                            <input type="text" class="form-control" placeholder="Enter Previous Class" name="p_class" value=" <?php echo "{$info['p_class']}"; ?>">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="">Status</label>
                            <input type="text" class="form-control" placeholder="Enter Status" name="status" value=" <?php echo "{$info['status']}"; ?>">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="">Percentage</label>
                            <input type="text" class="form-control" placeholder="Enter Percentage" name="p_percentage" value=" <?php echo "{$info['p_percentage']}"; ?>">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="">Year</label>
                            <input type="text" class="form-control" placeholder="Enter Year" name="year" value=" <?php echo "{$info['year']}"; ?>">
                        </div>
                    </div>
                </div>
            </fieldset>

            <div class="col-lg-6">
                        <div class="form-group">
                            <label for="">Unique ID.</label>
                            <input type="text" class="form-control" name="unique_id" value=" <?php echo "{$info['unique_id']}"; ?>">
                        </div>
                    </div>
      
            <button type="submit" name="update_details" class="btn btn-success"><span id="loader" style="display: none"><i class="fas fa-duotone fa-spinner"></i></span>Update</button>
        </form>

    </div>
</div>
<?php
include('footer.php')
?>