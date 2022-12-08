<?php
include('includes/config.php')
?>
<?php
if(isset($_POST['submit_details']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $query=$_POST['query'];
    $sql= mysqli_query($db,"INSERT INTO query (`name`,`email`,`phone`,`query`) VALUES ('$name','$email','$phone','$query')") or die('');
    if($sql)
    {
        header("location:contact_us.php");
    }
    
}
?>
<?php
include('header.php')

?>



<nav class="navbar navbar-expand-lg navbar-light" style="background-color: rgb(0 0 0 / 20%);">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">SMS</a>
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
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
                        <a href="#" class="dropdown-item">Action</a>
                        <a href="logout.php" class="dropdown-item">Logout</a>
                    </div>
                <?php } else { ?>
                    <a href="login.php" class="nav-link"><i class="fa fa-user mr-2"></i>Login</a>
                <?php } ?>
            </li>
        </ul>

    </div>
</nav>

<section class="p-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 py-5">
                <h2>About Us</h2>
                <div class="pr-5">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam in dolore, nesciunt doloremque laudantium nostrum alias laborum voluptates corrupti esse recusandae veritatis, tempora illo sequi! Tempore nesciunt eius blanditiis illum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad impedit delectus quasi dolore beatae alias consequuntur omnis mollitia aut laborum, reiciendis, minus ullam dicta. Quos qui facilis tenetur necessitatibus commodi.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda et delectus totam quos sapiente error ipsa expedita? Officiis culpa ut sequi libero, vitae mollitia voluptatum consequatur quo, quis nihil facere quod voluptas. Deleniti quos ad similique molestiae doloremque labore odio culpa earum dolore adipisci esse commodi accusamus quam reiciendis error, sit debitis ex. Aperiam fugit adipisci facere at autem labore expedita maxime incidunt consectetur iure, atque veniam voluptas
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur quaerat dolorum sunt ab, harum, distinctio corrupti blanditiis necessitatibus facilis possimus vero aspernatur minus ut totam alias est quidem optio? In.
                    </p>
                </div>
                
            </div>
            <div class="col-lg-6" style="background:url(./assets/img/university.jfif) center/cover no-repeat ">
            </div>
        </div>
    </div>
</section>
<!--Section: Contact v.2-->
<section class="mb-4 container">

    <!--Section heading-->
    <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
        a matter of hours to help you.</p>

    <div class="row">

        <!--Grid column-->
        <div class="col-md-9 mb-md-0 mb-5">
            <form method="POST" action="#">

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="name" name="name" class="form-control">
                            <label for="name" class="">Your name</label>
                        </div>
                    </div>
                    <br>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="email" name="email" class="form-control">
                            <label for="email" class="">Your email</label>
                        </div>
                    </div>
                
                    <!--Grid column-->

                </div>
                <!--Grid row-->
                <br>
                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <input type="text" id="phone" name="phone" class="form-control">
                            <label for="phone" class="">Phone No.</label>
                        </div>
                    </div>
                </div>
                <br>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form">
                            <textarea type="text" name="query" rows="2" class="form-control md-textarea"></textarea>
                            <label for="query">Your message</label>
                        </div>

                    </div>
                </div>
                <br>
                <!--Grid row-->

           

            <div class="text-center text-md-left">
                <input class="btn btn-dark btn-block" name="submit_details" type="submit" value="Submit">
            </div>
            </form>
            <div class="status">
  

            </div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-3 text-center">
            <ul class="list-unstyled mb-0">
                <li><i class="fas fa-map-marker-alt fa-2x"></i>
                    <p>Chandigarh,India</p>
                </li>

                <li><i class="fas fa-phone mt-4 fa-2x"></i>
                    <p>+91 95927-46900</p>
                </li>

                <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                    <p>kumar.princepapneja@google.com</p>
                </li>
            </ul>
        </div>
        <!--Grid column-->

    </div>

</section>
<!--Section: Contact v.2-->
<?php
include('footer.php')
?>