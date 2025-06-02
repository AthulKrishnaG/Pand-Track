<!DOCTYPE html>
	<!--side Database start-->
	<?php
        include("dbconnection.php");
		include("session.php");
		$pagetitle = "Success";
    ?>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
   <title>Arrow -  <?php echo"$pagetitle"; ?></title>
    <link rel="apple-touch-icon" href="../../../app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/ico/favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/vendors.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="../app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/components.css">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="../app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/core/colors/palette-gradient.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu 2-columns   fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="2-columns">

    <!--side menu start-->
	<?php
        include("header.php");
    ?>
	<!--side menu end-->
	<!--side menu start-->
	<?php
        include("menu.php");
    ?>
	<!--side menu end-->
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title"><?php echo"$pagetitle"; ?></h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a>
                                </li>
                               
                                <li class="breadcrumb-item active"><?php echo"$pagetitle"; ?>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
               
            </div>
            <div class="content-body">
                
                

                <!-- Outline variants section start -->
                <section id="outline-variants">
                  
                    <div class="row match-height">
                        <div class="col-md-6 col-sm-12">
                            <div class="card border-primary text-center bg-transparent">
                                <div class="card-content">
                                    <div class="card-body pt-3">
                                        <div class="container">
						<div class="row">
					<?php
						$msg = $_GET['msg'];
						switch($msg) 
						{
							case 1:
									print("
										<div class='col-md'>
										<img src='../app-assets/images/elements/success.png' alt='success' width='190' >
										</div>
										<div class='col-md'>
										<h1 class='mt-3 mb-1' style='color:green'>Question Added</h1>
										<p class='card-text'>Database is updated</p>
										<a href='questionAdd.php'><button class='btn btn-primary btn-darken-3'>Add More</button></a>&nbsp;&nbsp;
										<a href='questionView1.php'><button class='btn btn-info btn-darken-3'>View Data</button></a>
										</div>
										");
										break;
							case 2:
									print("
										<div class='col-md'>
										<img src='../app-assets/images/elements/successup.png' alt='success' width='190' >
										</div>
										<div class='col-md'>
										<h1 class='mt-3 mb-1' style='color:green'>Question Updated</h1>
										<p class='card-text'>Database is updated</p>
										<a href='questionAdd.php'><button class='btn btn-primary btn-darken-3'>Add More</button></a>&nbsp;&nbsp;
										<a href='questionView1.php'><button class='btn btn-info btn-darken-3'>View Data</button></a>
										</div>
										");
										break;
							case 3:
									print("
										<div class='col-md'>
										<img src='../app-assets/images/elements/successde.png' alt='success' width='190' >
										</div>
										<div class='col-md'>
										<h1 class='mt-3 mb-1' style='color:green'>Question Deleted</h1>
										<p class='card-text'>Database is updated</p>
										<a href='questionAdd.php'><button class='btn btn-primary btn-darken-3'>Add More</button></a>&nbsp;&nbsp;
										<a href='questionView1.php'><button class='btn btn-info btn-darken-3'>View Data</button></a>
										</div>
										");
										break;
							case 4:
									print("
										<div class='col-md'>
										<img src='../app-assets/images/elements/success.png' alt='success' width='190' >
										</div>
										<div class='col-md'>
										<h1 class='mt-3 mb-1' style='color:green'>Exam Created</h1>
										<p class='card-text'>Database is updated</p>
										<a href='examAdd.php'><button class='btn btn-primary btn-darken-3'>Add More</button></a>&nbsp;&nbsp;
										<a href='examView.php'><button class='btn btn-info btn-darken-3'>View Data</button></a>
										</div>
										");
										break;
							case 5:
									print("
										<div class='col-md'>
										<img src='../app-assets/images/elements/successup.png' alt='success' width='190' >
										</div>
										<div class='col-md'>
										<h1 class='mt-3 mb-1' style='color:green'>Exam Candidate Updated</h1>
										<p class='card-text'>Database is updated</p>
										
										<a href='examRegView1.php'><button class='btn btn-info btn-darken-3'>View Data</button></a>
										</div>
										");
										break;
							case 6:
									print("
										<div class='col-md'>
										<img src='../app-assets/images/elements/successde.png' alt='success' width='190' >
										</div>
										<div class='col-md'>
										<h1 class='mt-3 mb-1' style='color:green'>Exam Candidate Deleted</h1>
										<p class='card-text'>Database is updated</p>
										
										<a href='examRegView1.php'><button class='btn btn-info btn-darken-3'>View Data</button></a>
										</div>
										");
										break;
							case 7:
									print("
										<div class='col-md'>
										<img src='../app-assets/images/elements/success.png' alt='success' width='190' >
										</div>
										<div class='col-md'>
										<h1 class='mt-3 mb-1' style='color:green'>Course Added</h1>
										<p class='card-text'>Database is updated</p>
										<a href='courseAdd.php'><button class='btn btn-primary btn-darken-3'>Add More</button></a>&nbsp;&nbsp;
										<a href='courseView.php'><button class='btn btn-info btn-darken-3'>View Data</button></a>
										</div>
										");
										break;
							case 8:
									print("
										<div class='col-md'>
										<img src='../app-assets/images/elements/successup.png' alt='success' width='190' >
										</div>
										<div class='col-md'>
										<h1 class='mt-3 mb-1' style='color:green'>Course Updated</h1>
										<p class='card-text'>Database is updated</p>
										<a href='courseAdd.php'><button class='btn btn-primary btn-darken-3'>Add More</button></a>&nbsp;&nbsp;
										<a href='courseView.php'><button class='btn btn-info btn-darken-3'>View Data</button></a>
										</div>
										");
										break;
							case 9:
									print("
										<div class='col-md'>
										<img src='../app-assets/images/elements/successde.png' alt='success' width='190' >
										</div>
										<div class='col-md'>
										<h1 class='mt-3 mb-1' style='color:green'>Course Deleted</h1>
										<p class='card-text'>Database is updated</p>
										<a href='courseAdd.php'><button class='btn btn-primary btn-darken-3'>Add More</button></a>&nbsp;&nbsp;
										<a href='courseView.php'><button class='btn btn-info btn-darken-3'>View Data</button></a>
										</div>
										");
										break;
							case 10:
									print("
										<div class='col-md'>
										<img src='../app-assets/images/elements/success.png' alt='success' width='190' >
										</div>
										<div class='col-md'>
										<h1 class='mt-3 mb-1' style='color:green'>Event Added</h1>
										<p class='card-text'>Database is updated</p>
										<a href='eventAdd.php'><button class='btn btn-primary btn-darken-3'>Add More</button></a>&nbsp;&nbsp;
										<a href='eventView.php'><button class='btn btn-info btn-darken-3'>View Data</button></a>
										</div>
										");
										break;
							case 11:
									print("
										<div class='col-md'>
										<img src='../app-assets/images/elements/successup.png' alt='success' width='190' >
										</div>
										<div class='col-md'>
										<h1 class='mt-3 mb-1' style='color:green'>Event Updated</h1>
										<p class='card-text'>Database is updated</p>
										<a href='eventAdd.php'><button class='btn btn-primary btn-darken-3'>Add More</button></a>&nbsp;&nbsp;
										<a href='eventView.php'><button class='btn btn-info btn-darken-3'>View Data</button></a>
										</div>
										");
										break;
							case 12:
									print("
										<div class='col-md'>
										<img src='../app-assets/images/elements/successde.png' alt='success' width='190' >
										</div>
										<div class='col-md'>
										<h1 class='mt-3 mb-1' style='color:green'>Event Deleted</h1>
										<p class='card-text'>Database is updated</p>
										<a href='eventAdd.php'><button class='btn btn-primary btn-darken-3'>Add More</button></a>&nbsp;&nbsp;
										<a href='eventView.php'><button class='btn btn-info btn-darken-3'>View Data</button></a>
										</div>
										");
										break;	
							case 13:
									print("
										<div class='col-md'>
										<img src='../app-assets/images/elements/success.png' alt='success' width='190' >
										</div>
										<div class='col-md'>
										<h1 class='mt-3 mb-1' style='color:green'>Feed Added</h1>
										<p class='card-text'>Database is updated</p>
										<a href='feedsAdd.php'><button class='btn btn-primary btn-darken-3'>Add More</button></a>&nbsp;&nbsp;
										<a href='feedsView.php'><button class='btn btn-info btn-darken-3'>View Data</button></a>
										</div>
										");
										break;
							case 14:
									print("
										<div class='col-md'>
										<img src='../app-assets/images/elements/successup.png' alt='success' width='190' >
										</div>
										<div class='col-md'>
										<h1 class='mt-3 mb-1' style='color:green'>Feed Updated</h1>
										<p class='card-text'>Database is updated</p>
										<a href='feedsAdd.php'><button class='btn btn-primary btn-darken-3'>Add More</button></a>&nbsp;&nbsp;
										<a href='feedsView.php'><button class='btn btn-info btn-darken-3'>View Data</button></a>
										</div>
										");
										break;
							case 15:
									print("
										<div class='col-md'>
										<img src='../app-assets/images/elements/successde.png' alt='success' width='190' >
										</div>
										<div class='col-md'>
										<h1 class='mt-3 mb-1' style='color:green'>Feed Deleted</h1>
										<p class='card-text'>Database is updated</p>
										<a href='feedsAdd.php'><button class='btn btn-primary btn-darken-3'>Add More</button></a>&nbsp;&nbsp;
										<a href='feedsView.php'><button class='btn btn-info btn-darken-3'>View Data</button></a>
										</div>
										");
										break;
							case 16:
									print("
										<div class='col-md'>
										<img src='../app-assets/images/elements/success.png' alt='success' width='190' >
										</div>
										<div class='col-md'>
										<h1 class='mt-3 mb-1' style='color:green'>Image Gallery Added</h1>
										<p class='card-text'>Database is updated</p>
										<a href='galleryAdd.php'><button class='btn btn-primary btn-darken-3'>Add More</button></a>&nbsp;&nbsp;
										<a href='galleryView.php'><button class='btn btn-info btn-darken-3'>View Data</button></a>
										</div>
										");
										break;
							case 17:
									print("
										<div class='col-md'>
										<img src='../app-assets/images/elements/successup.png' alt='success' width='190' >
										</div>
										<div class='col-md'>
										<h1 class='mt-3 mb-1' style='color:green'>Image Gallery Updated</h1>
										<p class='card-text'>Database is updated</p>
										<a href='galleryAdd.php'><button class='btn btn-primary btn-darken-3'>Add More</button></a>&nbsp;&nbsp;
										<a href='galleryView.php'><button class='btn btn-info btn-darken-3'>View Data</button></a>
										</div>
										");
										break;
							case 18:
									print("
										<div class='col-md'>
										<img src='../app-assets/images/elements/successde.png' alt='success' width='190' >
										</div>
										<div class='col-md'>
										<h1 class='mt-3 mb-1' style='color:green'>Image Gallery Deleted</h1>
										<p class='card-text'>Database is updated</p>
										<a href='galleryAdd.php'><button class='btn btn-primary btn-darken-3'>Add More</button></a>&nbsp;&nbsp;
										<a href='galleryView.php'><button class='btn btn-info btn-darken-3'>View Data</button></a>
										</div>
										");
										break;
							case 19:
									print("
										<div class='col-md'>
										<img src='../app-assets/images/elements/success.png' alt='success' width='190' >
										</div>
										<div class='col-md'>
										<h1 class='mt-3 mb-1' style='color:green'>Student Added</h1>
										<p class='card-text'>Database is updated</p>
										<a href='userRegAdd.php'><button class='btn btn-primary btn-darken-3'>Add More</button></a>&nbsp;&nbsp;
										<a href='userRegView.php'><button class='btn btn-info btn-darken-3'>View Data</button></a>
										</div>
										");
										break;
							case 20:
									print("
										<div class='col-md'>
										<img src='../app-assets/images/elements/successup.png' alt='success' width='190' >
										</div>
										<div class='col-md'>
										<h1 class='mt-3 mb-1' style='color:green'>Student Updated</h1>
										<p class='card-text'>Database is updated</p>
										<a href='userRegAdd.php'><button class='btn btn-primary btn-darken-3'>Add More</button></a>&nbsp;&nbsp;
										<a href='userRegView.php'><button class='btn btn-info btn-darken-3'>View Data</button></a>
										</div>
										");
										break;
							case 20.1:
									print("
										<div class='col-md'>
										<img src='../app-assets/images/elements/successup.png' alt='success' width='190' >
										</div>
										<div class='col-md'>
										<h1 class='mt-3 mb-1' style='color:green'>Student Status Updated</h1>
										<p class='card-text'>Database is updated</p>
										<a href='userRegAdd.php'><button class='btn btn-primary btn-darken-3'>Add More</button></a>&nbsp;&nbsp;
										<a href='userRegView.php'><button class='btn btn-info btn-darken-3'>View Data</button></a>
										</div>
										");
										break;	
							case 20.2:
									print("
										<div class='col-md'>
										<img src='../app-assets/images/elements/successup.png' alt='success' width='190' >
										</div>
										<div class='col-md'>
										<h1 class='mt-3 mb-1' style='color:green'>Student Membership Updated</h1>
										<p class='card-text'>Database is updated</p>
										<a href='userRegAdd.php'><button class='btn btn-primary btn-darken-3'>Add More</button></a>&nbsp;&nbsp;
										<a href='userRegView.php'><button class='btn btn-info btn-darken-3'>View Data</button></a>
										</div>
										");
										break;
							case 20.3:
									print("
										<div class='col-md'>
										<img src='../app-assets/images/elements/successup.png' alt='success' width='190' >
										</div>
										<div class='col-md'>
										<h1 class='mt-3 mb-1' style='color:green'>Student Image Updated</h1>
										<p class='card-text'>Database is updated</p>
										<a href='userRegAdd.php'><button class='btn btn-primary btn-darken-3'>Add More</button></a>&nbsp;&nbsp;
										<a href='userRegView.php'><button class='btn btn-info btn-darken-3'>View Data</button></a>
										</div>
										");
										break;			
							case 21:
									print("
										<div class='col-md'>
										<img src='../app-assets/images/elements/successde.png' alt='success' width='190' >
										</div>
										<div class='col-md'>
										<h1 class='mt-3 mb-1' style='color:green'>Student Deleted</h1>
										<p class='card-text'>Database is updated</p>
										<a href='userRegAdd.php'><button class='btn btn-primary btn-darken-3'>Add More</button></a>&nbsp;&nbsp;
										<a href='userRegView.php'><button class='btn btn-info btn-darken-3'>View Data</button></a>
										</div>
										");
										break;	
							case 22:
									print("
										<div class='col-md'>
										<img src='../app-assets/images/elements/success.png' alt='success' width='190' >
										</div>
										<div class='col-md'>
										<h1 class='mt-3 mb-1' style='color:green'>Employee Added</h1>
										<p class='card-text'>Database is updated</p>
										<a href='empAdd.php'><button class='btn btn-primary btn-darken-3'>Add More</button></a>&nbsp;&nbsp;
										<a href='empView.php'><button class='btn btn-info btn-darken-3'>View Data</button></a>
										</div>
										");
										break;
							case 23:
									print("
										<div class='col-md'>
										<img src='../app-assets/images/elements/successup.png' alt='success' width='190' >
										</div>
										<div class='col-md'>
										<h1 class='mt-3 mb-1' style='color:green'>Employee Updated</h1>
										<p class='card-text'>Database is updated</p>
										<a href='empAdd.php'><button class='btn btn-primary btn-darken-3'>Add More</button></a>&nbsp;&nbsp;
										<a href='empView.php'><button class='btn btn-info btn-darken-3'>View Data</button></a>
										</div>
										");
										break;
							case 23.1:
									print("
										<div class='col-md'>
										<img src='../app-assets/images/elements/successup.png' alt='success' width='190' >
										</div>
										<div class='col-md'>
										<h1 class='mt-3 mb-1' style='color:green'>Employee Status Updated</h1>
										<p class='card-text'>Database is updated</p>
										<a href='empAdd.php'><button class='btn btn-primary btn-darken-3'>Add More</button></a>&nbsp;&nbsp;
										<a href='empView.php'><button class='btn btn-info btn-darken-3'>View Data</button></a>
										</div>
										");
										break;			
							case 24:
									print("
										<div class='col-md'>
										<img src='../app-assets/images/elements/successde.png' alt='success' width='190' >
										</div>
										<div class='col-md'>
										<h1 class='mt-3 mb-1' style='color:green'>Employee Deleted</h1>
										<p class='card-text'>Database is updated</p>
										<a href='empAdd.php'><button class='btn btn-primary btn-darken-3'>Add More</button></a>&nbsp;&nbsp;
										<a href='empView.php'><button class='btn btn-info btn-darken-3'>View Data</button></a>
										</div>
										");
										break;
							case 25:
									print("
										<div class='col-md'>
										<img src='../app-assets/images/elements/success.png' alt='success' width='190' >
										</div>
										<div class='col-md'>
										<h1 class='mt-3 mb-1' style='color:green'>Class Added</h1>
										<p class='card-text'>Database is updated</p>
										<a href='classAdd.php'><button class='btn btn-primary btn-darken-3'>Add More</button></a>&nbsp;&nbsp;
										<a href='classView.php'><button class='btn btn-info btn-darken-3'>View Data</button></a>
										</div>
										");
										break;
							case 26:
									print("
										<div class='col-md'>
										<img src='../app-assets/images/elements/successup.png' alt='success' width='190' >
										</div>
										<div class='col-md'>
										<h1 class='mt-3 mb-1' style='color:green'>Class Updated</h1>
										<p class='card-text'>Database is updated</p>
										<a href='classAdd.php'><button class='btn btn-primary btn-darken-3'>Add More</button></a>&nbsp;&nbsp;
										<a href='classView.php'><button class='btn btn-info btn-darken-3'>View Data</button></a>
										</div>
										");
										break;		
							case 27:
									print("
										<div class='col-md'>
										<img src='../app-assets/images/elements/successde.png' alt='success' width='190' >
										</div>
										<div class='col-md'>
										<h1 class='mt-3 mb-1' style='color:green'>Class Deleted</h1>
										<p class='card-text'>Database is updated</p>
										<a href='classAdd.php'><button class='btn btn-primary btn-darken-3'>Add More</button></a>&nbsp;&nbsp;
										<a href='classView.php'><button class='btn btn-info btn-darken-3'>View Data</button></a>
										</div>
										");
										break;	
							case 28:
									print("
										<div class='col-md'>
										<img src='../app-assets/images/elements/success.png' alt='success' width='190' >
										</div>
										<div class='col-md'>
										<h1 class='mt-3 mb-1' style='color:green'>Exam Created</h1>
										<p class='card-text'>Database is updated</p>
										<a href='examCreAdd.php'><button class='btn btn-primary btn-darken-3'>Add More</button></a>&nbsp;&nbsp;
										<a href='examCreView.php'><button class='btn btn-info btn-darken-3'>View Data</button></a>
										</div>
										");
										break;
							case 29:
									print("
										<div class='col-md'>
										<img src='../app-assets/images/elements/successup.png' alt='success' width='190' >
										</div>
										<div class='col-md'>
										<h1 class='mt-3 mb-1' style='color:green'>Exam Updated</h1>
										<p class='card-text'>Database is updated</p>
										<a href='examCreAdd.php'><button class='btn btn-primary btn-darken-3'>Add More</button></a>&nbsp;&nbsp;
										<a href='examCreView.php'><button class='btn btn-info btn-darken-3'>View Data</button></a>
										</div>
										");
										break;
							case 30:
									print("
										<div class='col-md'>
										<img src='../app-assets/images/elements/successde.png' alt='success' width='190' >
										</div>
										<div class='col-md'>
										<h1 class='mt-3 mb-1' style='color:green'>Exam Deleted</h1>
										<p class='card-text'>Database is updated</p>
										<a href='examCreAdd.php'><button class='btn btn-primary btn-darken-3'>Add More</button></a>&nbsp;&nbsp;
										<a href='examCreView.php'><button class='btn btn-info btn-darken-3'>View Data</button></a>
										</div>
										");
										break;	
							case 31:
									print("
										<div class='col-md'>
										<img src='../app-assets/images/elements/success.png' alt='success' width='190' >
										</div>
										<div class='col-md'>
										<h1 class='mt-3 mb-1' style='color:green'>Exam Subject Allocated</h1>
										<p class='card-text'>Database is updated</p>
										<a href='examTeSubAdd.php'><button class='btn btn-primary btn-darken-3'>Add More</button></a>&nbsp;&nbsp;
										<a href='examTeSubView.php'><button class='btn btn-info btn-darken-3'>View Data</button></a>
										</div>
										");
										break;
							case 32:
									print("
										<div class='col-md'>
										<img src='../app-assets/images/elements/successup.png' alt='success' width='190' >
										</div>
										<div class='col-md'>
										<h1 class='mt-3 mb-1' style='color:green'>Exam Subject Allocation Updated</h1>
										<p class='card-text'>Database is updated</p>
										<a href='examTeSubAdd.php'><button class='btn btn-primary btn-darken-3'>Add More</button></a>&nbsp;&nbsp;
										<a href='examTeSubView.php'><button class='btn btn-info btn-darken-3'>View Data</button></a>
										</div>
										");
										break;
							case 33:
									print("
										<div class='col-md'>
										<img src='../app-assets/images/elements/successde.png' alt='success' width='190' >
										</div>
										<div class='col-md'>
										<h1 class='mt-3 mb-1' style='color:green'>Exam Subject Allocatio Deleted</h1>
										<p class='card-text'>Database is updated</p>
										<a href='examTeSubAdd.php'><button class='btn btn-primary btn-darken-3'>Add More</button></a>&nbsp;&nbsp;
										<a href='examTeSubView.php'><button class='btn btn-info btn-darken-3'>View Data</button></a>
										</div>
										");
										break;	
							case 34:
									print("
										<div class='col-md'>
										<img src='../app-assets/images/elements/successde.png' alt='success' width='190' >
										</div>
										<div class='col-md'>
										<h1 class='mt-3 mb-1' style='color:green'>Message Deleted</h1>
										<p class='card-text'>Database is updated</p>
										
										<a href='contactView.php'><button class='btn btn-info btn-darken-3'>View Data</button></a>
										</div>
										");
										break;	
							case 35:
									print("
										<div class='col-md'>
										<img src='../app-assets/images/elements/success.png' alt='success' width='190' >
										</div>
										<div class='col-md'>
										<h1 class='mt-3 mb-1' style='color:green'>Exam Category Added</h1>
										<p class='card-text'>Database is updated</p>
										<a href='examCateAdd.php'><button class='btn btn-primary btn-darken-3'>Add More</button></a>&nbsp;&nbsp;
										<a href='examCateView.php'><button class='btn btn-info btn-darken-3'>View Data</button></a>
										</div>
										");
										break;
							case 36:
									print("
										<div class='col-md'>
										<img src='../app-assets/images/elements/successup.png' alt='success' width='190' >
										</div>
										<div class='col-md'>
										<h1 class='mt-3 mb-1' style='color:green'>Exam Category Updated</h1>
										<p class='card-text'>Database is updated</p>
										<a href='examCateAdd.php'><button class='btn btn-primary btn-darken-3'>Add More</button></a>&nbsp;&nbsp;
										<a href='examCateView.php'><button class='btn btn-info btn-darken-3'>View Data</button></a>
										</div>
										");
										break;		
							case 37:
									print("
										<div class='col-md'>
										<img src='../app-assets/images/elements/successde.png' alt='success' width='190' >
										</div>
										<div class='col-md'>
										<h1 class='mt-3 mb-1' style='color:green'>Exam Category Deleted</h1>
										<p class='card-text'>Database is updated</p>
										<a href='examCateAdd.php'><button class='btn btn-primary btn-darken-3'>Add More</button></a>&nbsp;&nbsp;
										<a href='examCateView.php'><button class='btn btn-info btn-darken-3'>View Data</button></a>
										</div>
										");
										break;
							case 38:
									print("
										<div class='col-md'>
										<img src='../app-assets/images/elements/success.png' alt='success' width='190' >
										</div>
										<div class='col-md'>
										<h1 class='mt-3 mb-1' style='color:green'>Call Me Request Added</h1>
										<p class='card-text'>Database is updated</p>
										<a href='callmeView.php'><button class='btn btn-info btn-darken-3'>View Data</button></a>
										</div>
										");
										break;
							case 39:
									print("
										<div class='col-md'>
										<img src='../app-assets/images/elements/successup.png' alt='success' width='190' >
										</div>
										<div class='col-md'>
										<h1 class='mt-3 mb-1' style='color:green'>Call Me Request Updated</h1>
										<p class='card-text'>Database is updated</p>
										<a href='callmeView.php'><button class='btn btn-info btn-darken-3'>View Data</button></a>
										</div>
										");
										break;		
							case 40:
									print("
										<div class='col-md'>
										<img src='../app-assets/images/elements/successde.png' alt='success' width='190' >
										</div>
										<div class='col-md'>
										<h1 class='mt-3 mb-1' style='color:green'>Call Me Request Deleted</h1>
										<p class='card-text'>Database is updated</p>
										<a href='callmeView.php'><button class='btn btn-info btn-darken-3'>View Data</button></a>
										</div>
										");
										break;					
							default:
									print("
										<div class='col-md'>
										<img src='../app-assets/images/elements/success.png' alt='success' width='190' >
										</div>
										<div class='col-md'>
										<h1 class='mt-3 mb-1' style='color:green'>Updated</h1>
										<p class='card-text'>Database is updated</p>
										
										<a href='index.php'><button class='btn btn-info btn-darken-3'>View Home</button></a>
										</div>
										");
										break;
						}
						?>
						 </div>
						</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </section>
                <!-- Outline variants section end -->

                

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

   <!--side menu start-->
	<?php
        include("footer.php");
    ?>
	<!--side menu end-->


    <!-- BEGIN: Vendor JS-->
    <script src="../app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="../app-assets/js/core/app-menu.js"></script>
    <script src="../app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>