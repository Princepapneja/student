 <!-- Navbar -->
 <nav class="navbar navbar-expand navbar-white">
   <!-- Left navbar links -->
   <ul class="navbar-nav">
     <li class="nav-item">
       <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
     </li>
     <li class="nav-item d-none d-sm-inline-block">
       <a href="../index.php" class="nav-link">Home</a>
     </li>
     <li class="nav-item d-none d-sm-inline-block">
       <a href="../contact_us.php" class="nav-link">Contact</a>
     </li>
   </ul>

   <!-- Right navbar links -->
   <ul class="navbar-nav ml-auto">
     <!-- Navbar Search -->
     <li class="nav-item">
       <a class="nav-link" data-widget="navbar-search" href="#" role="button">
         <i class="fas fa-search"></i>
       </a>
       <div class="navbar-search-block">
         <form class="form-inline">
           <div class="input-group input-group-sm">
             <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
             <div class="input-group-append">
               <button class="btn btn-navbar" type="submit">
                 <i class="fas fa-search"></i>
               </button>
               <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                 <i class="fas fa-times"></i>
               </button>
             </div>
           </div>
         </form>
       </div>
     </li>

     <!-- Messages Dropdown Menu -->
     <li class="nav-item dropdown">
       <a class="nav-link" data-toggle="dropdown" href="#">
         <i class="far fa-comments"></i>
         <span class="badge badge-danger navbar-badge">3</span>
       </a>
       <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
         <a href="#" class="dropdown-item">
           <!-- Message Start -->
           <div class="media">
             <img src="../dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
             <div class="media-body">
               <h3 class="dropdown-item-title">
                 Brad Diesel
                 <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
               </h3>
               <p class="text-sm">Call me whenever you can...</p>
               <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
             </div>
           </div>
           <!-- Message End -->
         </a>
         <div class="dropdown-divider"></div>
         <a href="#" class="dropdown-item">
           <!-- Message Start -->
           <div class="media">
             <img src="../dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
             <div class="media-body">
               <h3 class="dropdown-item-title">
                 John Pierce
                 <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
               </h3>
               <p class="text-sm">I got your message bro</p>
               <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
             </div>
           </div>
           <!-- Message End -->
         </a>
         <div class="dropdown-divider"></div>
         <a href="#" class="dropdown-item">
           <!-- Message Start -->
           <div class="media">
             <img src="../dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
             <div class="media-body">
               <h3 class="dropdown-item-title">
                 Nora Silvester
                 <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
               </h3>
               <p class="text-sm">The subject goes here</p>
               <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
             </div>
           </div>
           <!-- Message End -->
         </a>
         <div class="dropdown-divider"></div>
         <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
       </div>
     </li>
     <!-- Notifications Dropdown Menu -->
     <li class="nav-item dropdown">
       <a class="nav-link" data-toggle="dropdown" href="#">
         <i class="far fa-bell"></i>
         <span class="badge badge-warning navbar-badge">15</span>
       </a>
       <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
         <span class="dropdown-item dropdown-header">15 Notifications</span>
         <div class="dropdown-divider"></div>
         <a href="#" class="dropdown-item">
           <i class="fas fa-envelope mr-2"></i> 4 new messages
           <span class="float-right text-muted text-sm">3 mins</span>
         </a>
         <div class="dropdown-divider"></div>
         <a href="#" class="dropdown-item">
           <i class="fas fa-users mr-2"></i> 8 friend requests
           <span class="float-right text-muted text-sm">12 hours</span>
         </a>
         <div class="dropdown-divider"></div>
         <a href="#" class="dropdown-item">
           <i class="fas fa-file mr-2"></i> 3 new reports
           <span class="float-right text-muted text-sm">2 days</span>
         </a>
         <div class="dropdown-divider"></div>
         <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
       </div>
     </li>
     <li class="nav-item">
       <a href="../logout.php" class="nav-link" title="Logout"><i class="fa fa-sign-out-alt"></i></a>
     </li>
   </ul>
 </nav>
 <!-- /.navbar -->

 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
   <!-- Brand Logo -->
   <a href="<?= $site_url ?>" class="brand-link">
     <img src="../dist/img/AdminLTELogo.png" alt="Admin Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
     <span class="brand-text font-weight-light">Teacher</span>
   </a>

   <!-- Sidebar -->
   <div class="sidebar">
     <!-- SidebarSearch Form -->
     <div class="form-inline">
       <div class="input-group" data-widget="sidebar-search">
         <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
         <div class="input-group-append">
           <button class="btn btn-sidebar">
             <i class="fas fa-search fa-fw"></i>
           </button>
         </div>
       </div>
     </div>

     <!-- Sidebar Menu -->
     <nav class="mt-2">
       <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
         <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         <li class="nav-item">
           <a href="<?= $site_url ?>teacher/dashboard.php" class="nav-link">
             <i class="nav-icon fas fa-tachometer-alt"></i>
             <p>Dashboard</p>
           </a>
         </li>

         <!-- class routine and exams -->


         <li class="nav-item has-treeview">
           <a href="#" class="nav-link">
             <i class="nav-icon fas fa-tree"></i>
             <p>
               Manage Class Routines
               <i class="fas fa-angle-right right"></i>
             </p>
           </a>
           <ul class="nav nav-treeview">
             <li class="nav-item">
               <a href="<?= $site_url ?>teacher/time_table.php" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Time-Table</p>
               </a>
             </li>
           </ul>
         </li>
         <!-- Examination -->

         <li class="nav-item has-treeview">
           <a href="#" class="nav-link">
             <i class="nav-icon fas fa-tree"></i>
             <p>
               Manage Examination
               <i class="fas fa-angle-right right"></i>
             </p>
           </a>
           <ul class="nav nav-treeview">
             <li class="nav-item">
               <a href="<?= $site_url ?>teacher/datesheet.php" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Datesheet</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="<?= $site_url ?>teacher/result.php" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Result</p>
               </a>
             </li>
           </ul>
         </li>
         <!-- Study -->

         <li class="nav-item has-treeview">
           <a href="#" class="nav-link">
             <i class="nav-icon fas fa-tree"></i>
             <p>
               Manage Study Material
               <i class="fas fa-angle-right right"></i>
             </p>
           </a>
           <ul class="nav nav-treeview">
             <li class="nav-item">
               <a href="<?= $site_url ?>teacher/study_material.php" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Notes</p>
               </a>
             </li>
           </ul>
         </li>

         <!-- Events -->
         <li class="nav-item has-treeview">
           <a href="#" class="nav-link">
             <i class="nav-icon fas fa-tree"></i>
             <p>
               Manage Events
               <i class="fas fa-angle-right right"></i>
             </p>
           </a>
           <ul class="nav nav-treeview">
             <li class="nav-item">
               <a href="<?= $site_url ?>teacher/events.php" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Events</p>
               </a>
             </li>
           </ul>

         </li>
         <!-- Notice -->
         <li class="nav-item has-treeview">
           <a href="#" class="nav-link">
             <i class="nav-icon fas fa-tree"></i>
             <p>
               Manage Notice Board
               <i class="fas fa-angle-right right"></i>
             </p>
           </a>
            <ul class="nav nav-treeview">
             <li class="nav-item">
               <a href="<?= $site_url ?>teacher/notice_board.php" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Notice</p>
               </a>
             </li>
             
           </ul>
         </li>

         <!-- logout -->
         <li class="nav-item">
           <a href="../logout.php" class="nav-link text-right">Logout <i class="fa fa-sign-out-alt"></i></a>
         </li>
       </ul>
     </nav>
     <!-- /.sidebar-menu -->
   </div>
   <!-- /.sidebar -->
 </aside>