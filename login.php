<?php
include('header.php')

?>
<section class="bg-light vh-100 d-flex">
    <div class="col-3 m-auto">
        <div class="card">
            <div class="card-body">
                <div class="text-center border rounded-circle mx-auto d-flex" style="width: 100px; height: 100px">
                        <i class="fa fa-user text-dark fa-3x m-auto"></i>
                </div>
                <br>
                <form action="actions/login.php" method="POST" class="">
                    <div class="md-form">
                        <label for="">E-mail</label>
                        <input type="email" id="email" name="email" placeholder="Your Email" class="form-control">

                    </div>
                    <br>
                    <div class="md-form">
                        <label for="">Password</label>
                        <input type="password" name="password" id="password" placeholder="Your Password" class="form-control">
                    </div>
                    <div class="text-center mt-3">
                    <button class="btn btn-primary" name="login">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?php
include('footer.php')
?>