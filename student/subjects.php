<?php
include('../includes/config.php')
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
                    <h1 class="m-0" text-dark>Subjects</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Student</a></li>
                        <li class="breadcrumb-item active">Subjects</li>
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

                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-header py-2">
                                <h3 class="card-title">
                                    Subjects
                                </h3>
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
                                                <th>Action</th>
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
          
        </div>
        <!--/. container-fluid -->
    </section>
    <!-- /.content -->
    <?php
    include('footer.php')
    ?>