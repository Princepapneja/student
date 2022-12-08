<?php
include('includes/config.php')
?>
<?php
include('header.php')
?>
<?php
if (isset($_POST['submit_details'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $query = $_POST['query'];
    $sql = mysqli_query($db, "INSERT INTO query (`name`,`email`,`phone`,`query`) VALUES ('$name','$email','$phone','$query')") or die('');
    if ($sql) {
        
    header("location:index.php");
        $_SESSION['status']="Your Query Submitted Successfully";
        
        
    }
    
}
?>

<nav class="navbar navbar-expand-lg navbar-light" style="background-color: rgb(0 0 0 / 20%);">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">SMS</a>
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
                <a class="nav-link" href="contact_us.php">Contact Us</a>
            </div>
        </div>
        <ul class="navbar-nav ml-auto nav-flex-icons">
            <li class="nav-item dropdown">
                <?php if (isset($_SESSION['login'])) { ?>
                    <a href="" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user mr-2"></i>Account
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
                        <a href="/student/admin/dashboard.php" class="dropdown-item">Dashboard</a>
                        <a href="logout.php" class="dropdown-item">Logout</a>
                    </div>
                <?php } else { ?>
                    <a href="login.php" class="nav-link"><i class="fa fa-user mr-2"></i>Login</a>
                <?php } ?>
            </li>
        </ul>

    </div>
</nav>
<!-- Form -->
<div class="d-flex shadow" style="height: 500px; background:linear-gradient(-45deg, #90B0E8 50%, transparent 50%)">
    <div class="container-fluid my-auto">
        <div class="row">
            <div class="col-lg-6 my-auto">
                <h1 class="display-3">Admission Open</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium fugit rerum molestias itaque quam quidem! Cupiditate eum excepturi, delectus aperiam nam, modi dolorem cumque reiciendis commodi exercitationem, unde totam error! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta dolor modi laboriosam adipisci, provident hic nemo, nobis voluptates nihil sunt aliquam natus qui temporibus cumque dicta et tenetur saepe cupiditate!</p>
                
            </div>
            <div class="col-lg-6">
                <div class="col-lg-8 mx-auto card shadow-lg">
                    <div class="card-body">
                        
                        <form action="#" method="POST" class="">

                            <h3>Query Form</h3>
                            <?php
                            if(isset($_SESSION['status']))
                            {
                                echo $_SESSION['status'];
                                unset($_SESSION['status']);
                            }
                            ?>
                            <br>
                            <div class="md-form">
                                <input type="text" name="name" id="form1" class="form-control" placeholder="Your Name">
                            </div>
                            <br>
                            <div class="md-form">
                                <input type="email" name="email" id="email" class="form-control" placeholder="Your Email">
                            </div>
                            <br>
                            <div class="md-form">
                                <input type="text" name="phone" id="mobile" class="form-control" placeholder=" Your Mobile">
                            </div>
                            <br>
                            <div class="md-form">
                                <textarea name="query" class="form-control" id="" placeholder="Your Query"></textarea>
                            </div>
                            <br>
                            <button name="submit_details" class="btn btn-dark btn-block">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- about us -->
<section class="p-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 py-5">
                <h2>About Us</h2>
                <div class="pr-5">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam in dolore, nesciunt doloremque laudantium nostrum alias laborum voluptates corrupti esse recusandae veritatis, tempora illo sequi! Tempore nesciunt eius blanditiis illum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad impedit delectus quasi dolore beatae alias consequuntur omnis mollitia aut laborum, reiciendis, minus ullam dicta. Quos qui facilis tenetur necessitatibus commodi.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda et delectus totam quos sapiente error ipsa expedita? Officiis culpa ut sequi libero, vitae mollitia voluptatum consequatur quo, quis nihil facere quod voluptas. Deleniti quos ad similique molestiae doloremque labore odio culpa earum dolore adipisci esse commodi accusamus quam reiciendis error, sit debitis ex. Aperiam fugit adipisci facere at autem labore expedita maxime incidunt consectetur iure, atque veniam voluptas
                    </p>
                </div>
                <a href="contact_us.php" class="btn btn-secondary">Know More</a>
            </div>
            <div class="col-lg-6" style="background:url(./assets/img/university.jfif) center/cover no-repeat ">
            </div>
        </div>
    </div>
</section>
<!-- our courses -->
<section class="py-5 bg-light">
    <div class="text-center mb-5">
        <h2>Our Courses</h2>
    </div>
    <div class="container">
        <div class="row">
            <?php
            $query = mysqli_query($db, "SELECT * FROM courses ORDER BY id DESC LIMIT 0,8");
            while ($courses = mysqli_fetch_object($query)) { ?>
                <div class="col-lg-3 mb-4">
                    <div class="card">
                        <img style="width: 100%; height: 170px; object-fit: cover; object-position: center;" src="./dist/uploads/<?= $courses->image ?>" alt="" class="img-fluid rounded-top">
                        <div class="card-body">
                            <b><?= $courses->name ?></b>
                            <p class="card-text"> <b>Duration</b> <?= $courses->duration ?><br>
                                <b>Fees:</b> <?= $courses->fees ?>/- Rs
                            </p>
                           </div>
                    </div>
                </div>
            <?php } ?>
        </div>

    </div>
</section>

<!-- our teachers -->

<section class="py-5">
    <div class="text-center mb-5">
        <h2 class="font=weight-bold">Our Teachers</h2>
    </div>
    <br>
    <br>
    <div class="container">
        <div class="row">
            <?php
            $query = mysqli_query($db, "SELECT * FROM accounts WHERE type = 'teacher' ORDER BY id DESC LIMIT 0,8");
            while ($teachers = mysqli_fetch_object($query)) { ?>
                <div class="col-lg-3 my-5">
                    <div class="card">
                        <div class="col-7 position-absolute" style="top:-120px">
                            <img src="./dist/uploads/<?= $teachers->image ?>" alt="" class="mw-100 border rounded-circle">
                        </div>
                        <br>
                        <div class="card-body pt-5 mt-4">
                            <h5 class="card-title mb-0">Name: <?= $teachers->name ?></h5>
                            <p><i class="fa fa-star text-warning"></i> <i class="fa fa-star text-warning"></i> <i class="fa fa-star text-warning"></i> <i class="fa fa-star text-warning"></i> <i class="fa fa-star text-warning"></i></p>
                            <p class="card-text">                                
                            </p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>

    </div>
</section>
<!-- Achivements -->
<section class="py-5" style=" background: skyblue">
    <div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2>Achivements</h2>
                    <img src="./assets/img/university.jfif" alt="" class="img-fluid rounded">
                </div>
                <div class="col-lg-6 my-auto">
                    <div class="row">
                        <div class="col-lg-6 mb-4 pr-5">
                            <div class="border shadow rounded">
                                <div class="card-body text-center">
                                    <span><i class="fa fa-graduation-cap fa-2x"></i></span>
                                    <h2 class="my-2 font-weight-bold h1">334</h2>
                                    <hr style="border: 1px solid blue;">
                                    <h4>Gradutes</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-4">
                            <div class="border shadow rounded">
                                <div class="card-body text-center">
                                    <span><i class="fa fa-graduation-cap fa-2x"></i></span>
                                    <h2 class="my-2 font-weight-bold h1">334</h2>
                                    <hr style="border: 1px solid blue;">
                                    <h4>Gradutes</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-4">
                            <div class="border shadow rounded">
                                <div class="card-body text-center">
                                    <span><i class="fa fa-graduation-cap fa-2x"></i></span>
                                    <h2 class="my-2 font-weight-bold h1">334</h2>
                                    <hr style="border: 1px solid blue;">
                                    <h4>Gradutes</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-4">
                            <div class="border shadow rounded">
                                <div class="card-body text-center">
                                    <span><i class="fa fa-graduation-cap fa-2x"></i></span>
                                    <h2 class="my-2 font-weight-bold h1">334</h2>
                                    <hr style="border: 1px solid blue;">
                                    <h4>Gradutes</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-5">
    <div>
        <h2 class="text-center mb-5">What People Says</h2>
    </div>
    <div class="container">

        <div class="row">
            <div class="col-6">
                <div class="border rounded position-relative">
                    <div class="p-4 text-center">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate similique suscipit consectetur! Explicabo, nobis quidem nemo facere laborum modi tempore nulla sapiente enim tenetur molestiae error quas natus, totam in.
                    </div>
                    <i class="fa fa-quote-left fa-3x position-absolute" style="top:.5rem; left: .5rem; opacity:.2;"></i>
                </div>
                <div class="text-center mt-n2">

                    <img src="./assets/img/university.jfif" alt="" class="rounded-circle border" width="100" height="100">
                    <h6 class="mb-0"><b>Name Of Candidate</b></h6>
                    <p><i>Designation</i></p>
                </div>
            </div>
            <div class="col-6">
                <div class="border rounded position-relative">
                    <div class="p-4 text-center">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate similique suscipit consectetur! Explicabo, nobis quidem nemo facere laborum modi tempore nulla sapiente enim tenetur molestiae error quas natus, totam in.
                    </div>
                    <i class="fa fa-quote-left fa-3x position-absolute" style="top:.5rem; left: .5rem; opacity:.2;"></i>
                </div>
                <div class="text-center mt-n2">

                    <img src="./assets/img/university.jfif" alt="" class="rounded-circle border" width="100" height="100">
                    <h6 class="mb-0"><b>Name Of Candidate</b></h6>
                    <p><i>Designation</i></p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include('footer.php')
?>