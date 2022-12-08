<?php
include('../includes/config.php')
?>
<?php
$id = $_GET['id'];

$result = mysqli_query($db, "SELECT * FROM accounts WHERE id='$id'");

$info = $result->fetch_assoc();
if (isset($_POST['update_details'])) {
    $name = $_POST['name'];
    $type = 'student';
    $email = $_POST['email'];
    $unique_id = $_POST['unique_id'];
    $mobile = $_POST['phone'];
    $address = $_POST['address'];
    $country = $_POST['country'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $pincode = $_POST['pincode'];

    $f_name = $_POST['f_name'];
    $f_mobile = $_POST['f_number'];
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
    $image = $_FILES['thumbnail']['name'];

    $target_dir = "../dist/uploads/";
    $target_file = $target_dir . basename($_FILES["thumbnail"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $target_file);

    if ($image) {
        $query = mysqli_query($db, "UPDATE accounts SET name='$name',email='$email', unique_id= '$unique_id',type='$type',phone='$mobile',address='$address',country='$country',pincode='$pincode',state='$state',f_name='$f_name',f_number='$f_mobile',m_name='$m_name',m_mobile='$m_mobile',p_address='$p_address',p_country='$p_country',p_state='$p_state',p_pincode='$p_pincode',institute='$institute',p_class='$p_class',status='$status',p_percentage='$p_percentage',year='$year',class='$class',course='$course',section='$section',image='$image',city='$city',p_city='$p_city' WHERE id='$id'");
    } else {

        $query = mysqli_query($db, "UPDATE accounts SET name='$name',email='$email', unique_id= '$unique_id',type='$type',phone='$mobile',address='$address',country='$country',pincode='$pincode',state='$state',f_name='$f_name',f_number='$f_mobile',m_name='$m_name',m_mobile='$m_mobile',p_address='$p_address',p_country='$p_country',p_state='$p_state',p_pincode='$p_pincode',institute='$institute',p_class='$p_class',status='$status',p_percentage='$p_percentage',year='$year',class='$class',course='$course',section='$section',city='$city',p_city='$p_city' WHERE id='$id'");
    }
    if ($query) {

        $_SESSION['message'] = 'Student Details is Updated Succesfuly';
        header("location:students.php");
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

                <legend class="d-inline w-auto h5">Student Image</legend>

                <div class="row">

                    <div class="col-lg-4">

                        <div class="form-group">
                            <input type="file" name="thumbnail" id="thumbnail">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="file">Old Image:</label>
                            <img height="100px" width="100px" src="../dist/uploads/<?php echo "{$info['image']}"; ?>" alt="Student Image">
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
                <legend class="d-inline w-auto h5">Parent's Information</legend>
                <div class="row">

                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="">Father's Name</label>
                            <input type="text" class="form-control" placeholder="Enter Father's Name" name="f_name" value=" <?php echo "{$info['f_name']}"; ?>">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="">Father's Mobile</label>
                            <input type="text" class="form-control" placeholder="Enter Farther's Number" name="f_number" value=" <?php echo "{$info['f_number']}"; ?>">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="">Mother's Name</label>
                            <input type="text" class="form-control" placeholder="Enter Mother's Name" name="m_name" value=" <?php echo "{$info['m_name']}"; ?>">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="">Mother's Mobile</label>
                            <input type="text" class="form-control" placeholder="Enter Mother's Number" name="m_mobile" value=" <?php echo "{$info['m_mobile']}"; ?>">
                        </div>
                    </div>

                    <!-- address -->
                    <div class="col-lg-12">

                        <div class="form-group">
                            <label for="">Address</label>
                            <input type="text" class="form-control" placeholder="Enter Address" name="p_address" value=" <?php echo "{$info['p_address']}"; ?>">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="">Country</label>
                            <input type="text" class="form-control" placeholder="Enter Country" name="p_country" value=" <?php echo "{$info['p_country']}"; ?>">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="">State</label>
                            <input type="text" class="form-control" placeholder="Enter State" name="p_state" value=" <?php echo "{$info['p_state']}"; ?>">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="">City</label>
                            <input type="text" class="form-control" placeholder="Enter city" name="p_city" value="<?php echo "{$info['p_city']}"; ?>">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="">Pincode</label>
                            <input type="text" class="form-control" placeholder="Enter Pincode" name="p_pincode" value=" <?php echo "{$info['p_pincode']}"; ?>">
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

            <fieldset class="border border-secondary p-3 form-group">
                <legend class="d-inline w-auto h5">Admission Details</legend>
                <div class="row">

                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="">Class</label>
                            <input type="text" class="form-control" placeholder="Enter Class" name="class" value="<?php echo "{$info['class']}" ?>">
                            
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="">Course</label>
                            <input type="text" class="form-control" placeholder="Enter Course" name="course" value=" <?php echo "{$info['course']}"; ?>">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="">Section</label>
                            <input type="text" class="form-control" placeholder="Enter Section" name="section" value=" <?php echo "{$info['section']}"; ?>">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="">Unique ID.</label>
                            <input type="text" class="form-control" name="unique_id" value=" <?php echo "{$info['unique_id']}"; ?>">
                        </div>
                    </div>

                </div>
            </fieldset>

            <button type="submit" name="update_details" class="btn btn-success"><span id="loader" style="display: none"><i class="fas fa-duotone fa-spinner"></i></span>Update</button>
        </form>

    </div>
</div>
<?php
include('footer.php')
?>