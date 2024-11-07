<?php
    
	session_start();
    require('assets/dbconn.php');	

?>
<!Doctype html>
<html class="no-js" lang="zxx">
    
<!-- Mirrored from themephi.net/template/eduan/eduan/sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 Apr 2024 07:32:03 GMT -->
<head>
        <?php 
            require_once('sitegenerics/meta.php');                
        ?>
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.PNG">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="assets/css/odometer.min.css">
        <link rel="stylesheet" href="assets/css/nice-select.css">
        <link rel="stylesheet" href="assets/css/meanmenu.css">
        <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
        <link rel="stylesheet" href="assets/css/main.css">
    </head>
     
    <body>
        <!-- sidebar-information-area-start -->
        <div class="sidebar-info side-info">
            <div class="sidebar-logo-wrapper mb-25">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-8">
                        <div class="sidebar-logo">
                            <a href="index.html"><img src="assets/img/logo/logo.png" alt="logo-img" width = "90px"></a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-4">
                        <div class="sidebar-close-wrapper text-end">
                            <button class="sidebar-close side-info-close"><i class="fal fa-times"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sidebar-menu-wrapper fix">
                <div class="mobile-menu"></div>
            </div>
        </div>
        <div class="offcanvas-overlay"></div>
        <!-- sidebar-information-area-end -->

        <!-- header area start -->
        <header> 
            <div class="h2_header-area header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-sm-7 col-6">
                            <div class="h2_header-left">
                                <div class="h2_header-logo" id = "img-header">
                                    <img src="assets/img/logo/logo.png" alt="" width="50%">
                                </div>
                                <!-- <div class="h2_header-category d-none d-sm-block">
                                    <a href="#"><i class="fa-solid fa-grid"></i><span>Category</span></a>
                                    <ul class="h2_header-category-submenu">
                                        <li><a href="#">Design</a></li>
                                        <li><a href="#">Development</a></li>
                                        <li><a href="#">Architecture</a></li>
                                        <li><a href="#">Data Science</a></li>
                                        <li><a href="#">Marketing</a></li>
                                    </ul>
                                </div> -->
                            </div>
                        </div>
                        <div class="col-xl-6 d-none d-xl-block">
                            <div class="h2_header-middle">
                                <nav class="h2_main-menu mobile-menu" id="mobile-menu">
                                    <ul>
                                        <li><a href="index.php">Home</a></li>                                            
                                        <li><a href="courses.php">Courses</a></li>                                            
                                        <li><a href="about.php">About</a></li>
                                        <li><a href="contact.php">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        
                        <div class="col-xl-3 col-sm-5 col-6">
                            <div class="h2_header-right">
                                <div class="h2_header-btn d-none d-sm-block">
                                   
                                </div>
                                <div class="header-menu-bar d-xl-none ml-10">
                                    <span class="header-menu-bar-icon side-toggle">
                                        <i class="fa-light fa-bars"></i>
                                    </span>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </header>

        <main>
            <!-- breadcrumb area start -->
            <section class="breadcrumb-area bg-default" data-background="">
                <!-- <img src="assets/img/breadcrumb/shape-1.png" alt="" class="breadcrumb-shape"> -->
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadcrumb-content">
                                <h2 class="breadcrumb-title">Application Form</h2>
                                <div class="breadcrumb-list">
                                    <a href="index.php">Home</a>
                                    <span>Application Form</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb area end -->

           

            <!-- sign up area start -->
            <div class="account-area pt-120 pb-120" style="margin-top:-200px">
                <div class="container">
                    <div class="row justify-content-center">
                        
                        <div class="col-xl-12 col-lg-12 col-md-12">
                            <!-- <div class="account-wrap"> -->
                                <div class="row">
                                    <!-- <div class="account-top sign-up">
                                        <div class="account-top-current">
                                            <span>Application Form</span>
                                        </div>
                                        <div class="account-top-link">
                                            <a href="sign-in.html">Sign In</a>
                                        </div>
                                    </div> -->
                                    <div class="card" style="border-radius-20px;">
                                    <div class="account-main">
                                        <!-- <h3 class="account-title">Sign in to Your Account 👋</h3> -->
                                        <!-- <h3 class="account-title">Application</h3> -->
                                        <form action="" class="account-form" id = "account-form" name = "account-form">
                                            <div class="account-form-item mb-20">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <a href="#"><img src="assets/img/logo/logo.png" alt="logo" width="35%" height=""></a>
                                                    </div>
                                                    <div class="col-6">
                                                        <input type="hidden" id="applicant_image_hidden_tag" name="applicant_image_hidden_tag" value="F">
                                                        <a href="#"><img id="applicantImageSRC" src="assets/img/noimage.png" alt="logo" width="35%" style="float:right;border-radius:20px;"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="account-form-item mb-20">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <!-- <a href="#"><img src="assets/img/logo/logo.png" alt="logo" width="35%" height=""></a> -->
                                                    </div>
                                                    <div class="col-3 offset-3">
                                                        <input type="file" class="form-control" id="applicantImage" name="applicantImage"   onchange="preveiwImage(this)" accept="image/*" required/>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="account-form-item mb-20">
                                                <div class="row col-12" style="text-align:center">
                                                    <h4 style="color:green">College of Agriculture, Fisheries & Food Technology</h4>
                                                    <h5><span style="color:red">(CAFFTECH)</span></h5>
                                                    <p>
                                                        Emiola Village, Ijeda Ijesa/Ijebu-Jesa Road, P.M.B 1002,<br> 
                                                        Ijebu-Ijesa Oriade L.G.A, Osun State. <br>
                                                        Tel: 09136238044 ,09152511417, 09028095510<br>
                                                        website: www.caffech.com.ng, email: info@caffech.com.ng
                                                    </p>
                                                    <h4>Application form for Admission to Courses for the Academic Year</h4>
                                                </div>
                                            </div>
                                            <div class="account-form-item mb-20">
                                                <div class="account-form-label col-lg-12 col-md-6 col-sm-12">
                                                    <!-- <label><center>Beginning _________________________________</center></label> -->
                                                </div>
                                            </div>
                                            <div class="account-form-item mb-20">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                                        <div class="account-form-label">
                                                            <label>Surname</label>
                                                        </div>
                                                        <div class="account-form-input">
                                                            <input type="text" id="surname" name="surname" placeholder="Surname">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                                        <div class="account-form-label">
                                                            <label>Othernames</label>
                                                        </div>
                                                        <div class="account-form-input">
                                                            <input type="text" id="othernames" name="othernames" placeholder="Othernames">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="account-form-item mb-20">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                                        <div class="account-form-label">
                                                            <label style="visibility:;">Department</label>
                                                        </div>                                                        
                                                        <div class="">
                                                            <select name="department" id="department" class="form-control" style="height:48px;">
                                                                <option value="---">Select Department</option>
                                                                <option value="Deparment of Agriculture">Deparment of Agriculture</option>
                                                                <option value="Deparment of Fisheries">Deparment of Fisheries</option>
                                                                <option value="Deparment of Food Technology">Deparment of Food Technology</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                                        <div class="account-form-label">
                                                            <label style="visibility:;">Programmes</label>
                                                        </div>                                                        
                                                        <div class="">
                                                            <select name="programmes" id="programmes" class="form-control" style="height:48px;">
                                                                <option value="---">Select Programmes</option>
                                                                <option value="Prelim">Prelim</option>
                                                                <option value="ND">ND</option>
                                                                <option value="HND">HND</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="account-form-item mb-20">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                                        <div class="account-form-label">
                                                            <label style="visibility:;">Course</label>
                                                        </div>                                                        
                                                        <div class="">
                                                            <select name="course" id="course" class="form-control" style="height:48px;">
                                                                <option value="---">Select Course</option>
                                                                <option value="Course 1">Course 1</option>
                                                                <option value="Course 2">Course 2</option>
                                                                <option value="Course 3">Course 3</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                                        <div class="account-form-label">
                                                            <label style="visibility:;">Payment information</label>
                                                        </div>                                                        
                                                        <div class="account-form-input">
                                                            <input type="paymentInformation" id="paymentInformation" name="paymentInformation" placeholder="Payment Information">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="account-form-item mb-20">
                                                <div class="row col-12" style="text-align:center">
                                                    <h4 style="color:green">Personal Biodata</h4>
                                                </div>                                            
                                            </div>
                                            <!-- <div class="account-form-item mb-20">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                                        <div class="account-form-label">
                                                            <label>Surname</label>
                                                        </div>
                                                        <div class="account-form-input">
                                                            <input type="text" id="biodatasurname" name="biodatasurname" placeholder="Surname">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                                        <div class="account-form-label">
                                                            <label>Othernames</label>
                                                        </div>
                                                        <div class="account-form-input">
                                                            <input type="text" id="biodataothernames" name="biodataothernames" placeholder="Othernames">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>                                             -->
                                            <div class="account-form-item mb-20">
                                                <div class="account-form-label">
                                                    <label>Postal address</label>
                                                </div>
                                                <div class="account-form-input">
                                                    <input type="text" id="postaladdress" name="postaladdress" placeholder="Postal address">
                                                </div>
                                            </div>
                                            <div class="account-form-item mb-20">
                                                <div class="account-form-label">
                                                    <label>Permanent home address</label>
                                                </div>
                                                <div class="account-form-input">
                                                    <input type="text" id="permanenthomeaddress" name="permanenthomeaddress" placeholder="Permanent home address">
                                                </div>
                                            </div>
                                            <div class="account-form-item mb-20">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                                        <div class="account-form-label">
                                                            <label>Date of birth</label>
                                                        </div>
                                                        <div class="account-form-input">
                                                            <input type="date" id="dob" name="dob">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                                        <div class="account-form-label">
                                                            <label>Gender</label>
                                                        </div>
                                                        <div class="">
                                                            <select name="gender" id="gender" class="form-control" style="height:48px;">
                                                                <option value="---">Select gender</option>
                                                                <option value="male">Male</option>
                                                                <option value="female">Female</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>                                            
                                            <div class="account-form-item mb-20">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                                        <div class="account-form-label">
                                                            <label>Nationality</label>
                                                        </div>
                                                        <div class="">
                                                            <select name="nationality" id="nationality" class="form-control" style="height:48px;">
                                                                <option value="---">Select nationality</option>
                                                                <option value="nigerian">Nigerian</option>
                                                                <option value="others">Others</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                                        <div class="account-form-label">
                                                            <label>Marial status</label>
                                                        </div>
                                                        <div class="">
                                                            <select name="maritalstatus" id="maritalstatus" class="form-control" style="height:48px;">
                                                                <option value="---">Select marital status</option>
                                                                <option value="single">Single</option>
                                                                <option value="married">Married</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>                                            
                                            <div class="account-form-item mb-20">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-12">

                                                        <div class="account-form-label">
                                                            <label>State of origin</label>
                                                        </div>

                                                        <div id="state_div">
                                                            <!-- <select name="stateoforigin" id="stateoforigin" class="form-control" style="height:48px;">
                                                                <option value="---">Select state of origin</option>
                                                            </select> -->
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-12">

                                                        <div class="account-form-label">
                                                            <label>Local government</label>
                                                        </div>

                                                        <div class="" id="lga_div">
                                                            <select id='lga' name='lga' class="form-control" style='height:48px;margin-bottom:10px;' required>
                                                                <option value='---'>---</option>
                                                            </select>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>                                            
                                            <div class="account-form-item mb-20">
                                                <div class="account-form-label">
                                                    <label>Maiden name</label>
                                                </div>
                                                <div class="account-form-input">
                                                    <input type="text" id="maidenname" name="maidenname" placeholder="Maiden name">
                                                </div>
                                            </div>
                                            <div class="account-form-item mb-20">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                                        <div class="account-form-label">
                                                            <label>No. of children</label>
                                                        </div>
                                                        <div class="account-form-input">
                                                            <input type="number" id="noofchildren" name="noofchildren">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                                        <div class="account-form-label">
                                                            <label>Religion</label>
                                                        </div>
                                                        <div class="">
                                                            <select name="religion" id="religion" class="form-control" style="height:48px;">
                                                                <option value="---">Select religion</option>
                                                                <option value="christianity">Christianity</option>
                                                                <option value="islam">Islam</option>
                                                                <option value="others">Others</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>     
                                            <div class="account-form-item mb-20">
                                                <div class="row col-12" style="text-align:center">
                                                    <h4 style="color:green">Other Personal Details</h4>
                                                </div>                                            
                                            </div>  

                                            <div class="account-form-item mb-20">
                                                <div class="row">
                                                    <label>Name and address of Parent/Guardian or Next of Kin:</label>
                                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                                        <div class="account-form-label">
                                                            <label>Surname:</label>
                                                        </div>
                                                        <div class="account-form-input">
                                                            <input type="text" id="parentsurname" name="parentsurname" placeholder="Parent Surname">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                                        <div class="account-form-label">
                                                            <label>Othernames</label>
                                                        </div>
                                                        <div class="account-form-input">
                                                            <input type="text" id="parentothernames" name="parentothernames" placeholder="Parent Othernames">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>                                           
                                            <div class="account-form-item mb-20">
                                                <div class="account-form-label">
                                                    <label>Address</label>
                                                </div>
                                                <div class="account-form-input">
                                                    <input type="text" id="address" name="address" placeholder="Parent address">
                                                </div>
                                            </div>

                                            <div class="account-form-item mb-20">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                                        <div class="account-form-label">
                                                            <label>Telephone</label>
                                                        </div>
                                                        <div class="account-form-input">
                                                            <input type="text" id="telephone" name="telephone" placeholder="Telephone">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                                        <div class="account-form-label">
                                                            <label>Relationship to Applicant</label>
                                                        </div>
                                                        <div class="account-form-input">
                                                            <input type="text" id="relationshiptoapplicant" name="relationshiptoapplicant" placeholder="Relationship to applicant">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> 
                                             
                                            <div class="account-form-item mb-20">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                                        <div class="account-form-label">
                                                            <label>Extra-curricular activities e.g (Sport/Hobbies):</label>
                                                        </div>
                                                        <div class="account-form-input">
                                                            <input type="text" id="extracurricularactivities" name="extracurricularactivities" placeholder="Extra-curricular activities">
                                                        </div>
                                                    </div>
                                                    <!-- <div class="col-lg-6 col-md-6 col-sm-12">
                                                        <div class="account-form-label">
                                                            <label>Othernames</label>
                                                        </div>
                                                        <div class="account-form-input">
                                                            <input type="text" id="parentothernames" name="parentothernames" placeholder="Parent Othernames">
                                                        </div>
                                                    </div> -->
                                                </div>
                                            </div>                                                                                         
                                            <div class="account-form-item mb-20">
                                                <div class="account-form-label">
                                                    <label>Special applicants</label>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 account-form-condition">
                                                        <label class="condition_label">Blind
                                                            <input type="radio" id="blind" name="specialapplicant" value=     "blind">
                                                            <span class="check_mark"></span>
                                                        </label>
                                                    </div>
                                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 account-form-condition">
                                                        <label class="condition_label">Deaf
                                                            <input type="radio" id="deaf" name="specialapplicant" value = "deaf">
                                                            <span class="check_mark"></span>
                                                        </label>
                                                    </div>
                                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 account-form-condition">
                                                        <label class="condition_label">Dumb
                                                            <input type="radio" id="dumb" name="specialapplicant" value = "dumb">
                                                            <span class="check_mark"></span>
                                                        </label>
                                                    </div>
                                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 account-form-condition">
                                                        <label class="condition_label">Deaf and dumb
                                                            <input type="radio" id="deaf-dumb" name="specialapplicant" value = "deaf and dumb">
                                                            <span class="check_mark"></span>
                                                        </label>
                                                    </div>
                                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 account-form-condition">
                                                        <label class="condition_label">Others
                                                            <input type="radio" id="others" name="specialapplicant" value = "others">
                                                            <span class="check_mark"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>    
                                                          
                                            <div class="account-form-item mb-20">
                                                <div class="account-form-label">
                                                    <label>Have you ever been admitted into this institution or any other highter institution before?</label>
                                                </div>
                                                <div class="">
                                                    <select name="academichistory" id="academichistory" class="form-control" style="height:48px;">
                                                        <option value="---">Yes/No</option>
                                                        <option value="yes">Yes</option>
                                                        <option value="no">No</option>
                                                    </select>
                                                </div>
                                            </div>   

                                            <div class="account-form-item mb-20">
                                                <div class="row" id="yesoption">
                                                    <div class="account-form-label">
                                                        <label>If yes, which institution and why did you leave?</label>
                                                    </div>
                                                    <div class="account-form-input">
                                                        <input type="text" id="academichistoryreason" name="academichistoryreason" placeholder="Why you left your previous institution">
                                                    </div>
                                                </div>
                                            </div>   
                                            <div class="account-form-item mb-20">
                                                <div class="row col-12" style="text-align:center">
                                                    <h4 style="color:green">Academic record</h4>
                                                </div>                                            
                                            </div>    
                                            
                                            <div class="account-form-item mb-20">
                                                <div class="account-form-label">
                                                    <label>Name of Institution 1</label>
                                                </div>
                                                <div class="account-form-input">
                                                    <input type="text" id="nameofinstitution1" name="nameofinstitution[]" placeholder="Name of institution">
                                                </div>
                                            </div>                                                               
                                            <div class="account-form-item mb-20">
                                                <div class="row">                
                                                    <div class="account-form-label">
                                                        <label>Period</label>
                                                    <div>                                                                                       
                                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                                        <div class="account-form-label">
                                                            <label>From</label>
                                                        </div>                                                           
                                                        <div class="account-form-input">
                                                            <input type="date" id="from1" name="from[]">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                                        <div class="account-form-label">
                                                            <label>To</label>
                                                        </div>                                                           
                                                        <div class="account-form-input">
                                                            <input type="date" id="to1" name="to[]">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>     
                                            
                                            <div class="account-form-item mb-20">
                                                <div class="account-form-label">
                                                    <label>Qualification Obtained</label>
                                                </div>
                                                <div class="account-form-input">
                                                    <input type="text" id="qualification1" name="qualification[]" placeholder="Qualification obtained">
                                                </div>
                                            </div>   
                                            <hr>       
                                            
                                            <div class="account-form-item mb-20">
                                                <div class="account-form-label">
                                                    <label>Name of Institution 2</label>
                                                </div>
                                                <div class="account-form-input">
                                                    <input type="text" id="nameofinstitution2" name="nameofinstitution[]" placeholder="Name of institution">
                                                </div>
                                            </div>                                               
                                            
                                            <div class="account-form-item mb-20">
                                                <div class="row">                
                                                    <div class="account-form-label">
                                                        <label>Period</label>
                                                    </div>                                                                                       
                                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                                        <div class="account-form-label">
                                                            <label>From</label>
                                                        </div>                                                           
                                                        <div class="account-form-input">
                                                            <input type="date" id="from2" name="from[]">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                                        <div class="account-form-label">
                                                            <label>To</label>
                                                        </div>                                                           
                                                        <div class="account-form-input">
                                                            <input type="date" id="to2" name="to[]">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>     
                                            
                                            <div class="account-form-item mb-20">
                                                <div class="account-form-label">
                                                    <label>Qualification Obtained</label>
                                                </div>
                                                <div class="account-form-input">
                                                    <input type="text" id="qualification2" name="qualification[]" placeholder="Qualification obtained">
                                                </div>
                                            </div>   
                                            <hr>                                                                                
                                            
                                            <div class="account-form-item mb-20">
                                                <div class="account-form-label">
                                                    <label>Name of Institution 3</label>
                                                </div>
                                                <div class="account-form-input">
                                                    <input type="text" id="nameofinstitution3" name="nameofinstitution[]" placeholder="Name of institution">
                                                </div>
                                            </div>                                                  
                                            
                                            <div class="account-form-item mb-20">
                                                <div class="row">                
                                                    <div class="account-form-label">
                                                        <label>Period</label>
                                                    </div>                                                                                       
                                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                                        <div class="account-form-label">
                                                            <label>From</label>
                                                        </div>                                                           
                                                        <div class="account-form-input">
                                                            <input type="date" id="from3" name="from[]">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                                        <div class="account-form-label">
                                                            <label>To</label>
                                                        </div>                                                           
                                                        <div class="account-form-input">
                                                            <input type="date" id="to3" name="to[]">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>     
                                            
                                            <div class="account-form-item mb-20">
                                                <div class="account-form-label">
                                                    <label>Qualification Obtained</label>
                                                </div>
                                                <div class="account-form-input">
                                                    <input type="text" id="qualification3" name="qualification[]" placeholder="Qualification obtained">
                                                </div>
                                            </div>   
                                            <hr>                                                                                                
                                            <div class="account-form-item mb-20">
                                                <div class="account-form-label">
                                                    <label>Name of Institution 4</label>
                                                </div>
                                                <div class="account-form-input">
                                                    <input type="text" id="nameofinstitution4" name="nameofinstitution[]" placeholder="Name of institution">
                                                </div>
                                            </div>                                                                          
                                            <div class="account-form-item mb-20">
                                                <div class="row">                
                                                    <div class="account-form-label">
                                                        <label>Period</label>
                                                    </div>                                                                                       
                                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                                        <div class="account-form-label">
                                                            <label>From</label>
                                                        </div>                                                           
                                                        <div class="account-form-input">
                                                            <input type="date" id="from4" name="from[]">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                                        <div class="account-form-label">
                                                            <label>To</label>
                                                        </div>                                                           
                                                        <div class="account-form-input">
                                                            <input type="date" id="to4" name="to[]">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>     
                                            
                                            <div class="account-form-item mb-20">
                                                <div class="account-form-label">
                                                    <label>Qualification Obtained</label>
                                                </div>
                                                <div class="account-form-input">
                                                    <input type="text" id="qualification4" name="qualification[]" placeholder="Qualification obtained">
                                                </div>
                                            </div>   
                                            
                                            
                                            <div class="account-form-item mb-20">
                                                <div class="account-form-label">
                                                    <label>Examination passed or entered for (photocopies of certificates and statement of results must be attached)</label>
                                                </div>
                                            </div>  

                                            <div id="exam1">
                                                <div class="account-form-item mb-20">
                                                    <div class="account-form-label">
                                                        <label>Name of examination</label>
                                                    </div>
                                                    <div class="account-form-input">
                                                        <input type="text" id="nameofexaminations1" name="nameofexaminations[]" placeholder="E.g School certificates:GCE, O/A level, JSS-SSS">
                                                    </div>
                                                </div> 
                                                
                                                
                                                <div class="account-form-item mb-20">
                                                    <div class="row"> 
                                                        <div class="col-lg-4 col-md-12 col-sm-12">
                                                            <div class="account-form-label">
                                                                <label>Date of examination</label>
                                                            </div>                                                           
                                                            <div class="account-form-input">
                                                                <input type="date" id="dateofexamination1" name="dateofexamination[]">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-12 col-sm-12">
                                                            <div class="account-form-label">
                                                                <label>Centre number</label>
                                                            </div>                                                           
                                                            <div class="account-form-input">
                                                                <input type="text" id="centreno1" name="centreno[]" placeholder="Centre number">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-12 col-sm-12">
                                                            <div class="account-form-label">
                                                                <label>Examination number</label>
                                                            </div>                                                           
                                                            <div class="account-form-input">
                                                                <input type="text" id="examinationno1" name="examinationno[]" placeholder="Examination number">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> 
                                                
                                                <div class="account-form-item mb-20">
                                                    <div class="account-form-label">
                                                        <label>Candidates are to indicate both letter and number grades</label>
                                                    </div>
                                                    
                                                    NB:
                                                    <li>
                                                        <span style="color:red">Mark 'A.R' in grade column if you are awaiting results of examination</span> 
                                                    </li>                                                   
                                                    <li>
                                                        <span style="color:red">It is essential for every applicants awaiting results to state centres and examination numbers</span> 
                                                    </li>                                                                         
                                                    <li>
                                                        <span style="color:red">Send a photocopy of statment of results as soon as obtained but not later than </span> 
                                                    </li>                                                                         
                                                    <li>
                                                        <span style="color:red">(HND applicant must attach evidence of at least one year post-ND relevant employment) </span> 
                                                    </li>                                                                         
                                                </div>   
                                                
                                                <div class="account-form-item mb-20">
                                                    <div class="row"> 
                                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                                            <div class="account-form-label">
                                                                <label>Subject 1</label>
                                                            </div>                                                           
                                                            <div class="account-form-input">
                                                                <input type="text" id="subject1" name="subject[]">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                                            <div class="account-form-label">
                                                                <label>Grade 1</label>
                                                            </div>                                                           
                                                            <div class="account-form-input">
                                                                <input type="text" id="grade1" name="grade[]">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                                            <div class="account-form-label">
                                                                <label>Subject 2</label>
                                                            </div>                                                           
                                                            <div class="account-form-input">
                                                                <input type="text" id="subject2" name="subject[]">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                                            <div class="account-form-label">
                                                                <label>Grade 2</label>
                                                            </div>                                                           
                                                            <div class="account-form-input">
                                                                <input type="text" id="grade2" name="grade[]">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>                                             
                                                
                                                <div class="account-form-item mb-20">
                                                    <div class="row"> 
                                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                                            <div class="account-form-label">
                                                                <label>Subject 3</label>
                                                            </div>                                                           
                                                            <div class="account-form-input">
                                                                <input type="text" id="subject3" name="subject[]">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                                            <div class="account-form-label">
                                                                <label>Grade 3</label>
                                                            </div>                                                           
                                                            <div class="account-form-input">
                                                                <input type="text" id="grade3" name="grade[]">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                                            <div class="account-form-label">
                                                                <label>Subject 4</label>
                                                            </div>                                                           
                                                            <div class="account-form-input">
                                                                <input type="text" id="subject4" name="subject[]">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                                            <div class="account-form-label">
                                                                <label>Grade 4</label>
                                                            </div>                                                           
                                                            <div class="account-form-input">
                                                                <input type="text" id="grade4" name="grade[]">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>                                             
                                                
                                                <div class="account-form-item mb-20">
                                                    <div class="row"> 
                                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                                            <div class="account-form-label">
                                                                <label>Subject 5</label>
                                                            </div>                                                           
                                                            <div class="account-form-input">
                                                                <input type="text" id="subject5" name="subject[]">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                                            <div class="account-form-label">
                                                                <label>Grade 5</label>
                                                            </div>                                                           
                                                            <div class="account-form-input">
                                                                <input type="text" id="grade5" name="grade[]">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                                            <div class="account-form-label">
                                                                <label>Subject 6</label>
                                                            </div>                                                           
                                                            <div class="account-form-input">
                                                                <input type="text" id="subject6" name="subject[]">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                                            <div class="account-form-label">
                                                                <label>Grade 6</label>
                                                            </div>                                                           
                                                            <div class="account-form-input">
                                                                <input type="text" id="grade6" name="grade[]">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>                                             
                                                
                                                <div class="account-form-item mb-20">
                                                    <div class="row"> 
                                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                                            <div class="account-form-label">
                                                                <label>Subject 7</label>
                                                            </div>                                                           
                                                            <div class="account-form-input">
                                                                <input type="text" id="subject7" name="subject[]">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                                            <div class="account-form-label">
                                                                <label>Grade 7</label>
                                                            </div>                                                           
                                                            <div class="account-form-input">
                                                                <input type="text" id="grade7" name="grade[]">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                                            <div class="account-form-label">
                                                                <label>Subject 8</label>
                                                            </div>                                                           
                                                            <div class="account-form-input">
                                                                <input type="text" id="subject8" name="subject[]">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                                            <div class="account-form-label">
                                                                <label>Grade 8</label>
                                                            </div>                                                           
                                                            <div class="account-form-input">
                                                                <input type="text" id="grade8" name="grade[]">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>                                             
                                                
                                                <div class="account-form-item mb-20">
                                                    <div class="row"> 
                                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                                            <div class="account-form-label">
                                                                <label>Subject 9</label>
                                                            </div>                                                           
                                                            <div class="account-form-input">
                                                                <input type="text" id="subject9" name="subject[]">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                                            <div class="account-form-label">
                                                                <label>Grade 9</label>
                                                            </div>                                                           
                                                            <div class="account-form-input">
                                                                <input type="text" id="grade9" name="grade[]">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                                            <div class="account-form-label">
                                                                <label>Subject 10</label>
                                                            </div>                                                           
                                                            <div class="account-form-input">
                                                                <input type="text" id="subject10" name="subject[]">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                                            <div class="account-form-label">
                                                                <label>Grade 10</label>
                                                            </div>                                                           
                                                            <div class="account-form-input">
                                                                <input type="text" id="grade10" name="grade[]">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><hr>

                                            <div id="exam2">
                                                <div class="account-form-item mb-20">
                                                    <div class="account-form-label">
                                                        <label>Name of examination</label>
                                                    </div>
                                                    <div class="account-form-input">
                                                        <input type="text" id="nameofexaminations2" name="nameofexaminations[]" placeholder="E.g School certificates:GCE, O/A level, JSS-SSS">
                                                    </div>
                                                </div> 
                                                
                                                
                                                <div class="account-form-item mb-20">
                                                    <div class="row"> 
                                                        <div class="col-lg-4 col-md-12 col-sm-12">
                                                            <div class="account-form-label">
                                                                <label>Date of examination</label>
                                                            </div>                                                           
                                                            <div class="account-form-input">
                                                                <input type="date" id="dateofexamination2" name="dateofexamination[]">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-12 col-sm-12">
                                                            <div class="account-form-label">
                                                                <label>Centre number</label>
                                                            </div>                                                           
                                                            <div class="account-form-input">
                                                                <input type="text" id="centreno2" name="centreno[]" placeholder="Centre number">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-12 col-sm-12">
                                                            <div class="account-form-label">
                                                                <label>Examination number</label>
                                                            </div>                                                           
                                                            <div class="account-form-input">
                                                                <input type="text" id="examinationno2" name="examinationno[]" placeholder="Examination number">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> 
                                                
                                                <div class="account-form-item mb-20">
                                                    <div class="account-form-label">
                                                        <label>Candidates are to indicate both letter and number grades</label>
                                                    </div>
                                                    
                                                    NB:
                                                    <li>
                                                        <span style="color:red">Mark 'A.R' in grade column if you are awaiting results of examination</span> 
                                                    </li>                                                   
                                                    <li>
                                                        <span style="color:red">It is essential for every applicants awaiting results to state centres and examination numbers</span> 
                                                    </li>                                                                         
                                                    <li>
                                                        <span style="color:red">Send a photocopy of statment of results as soon as obtained but not later than </span> 
                                                    </li>                                                                         
                                                    <li>
                                                        <span style="color:red">(HND applicant must attach evidence of at least one year post-ND relevant employment) </span> 
                                                    </li>                                                                         
                                                </div>    
                                                
                                                <div class="account-form-item mb-20">
                                                    <div class="row"> 
                                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                                            <div class="account-form-label">
                                                                <label>Subject 1</label>
                                                            </div>                                                           
                                                            <div class="account-form-input">
                                                                <input type="text" id="subject11" name="subject[]">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                                            <div class="account-form-label">
                                                                <label>Grade 1</label>
                                                            </div>                                                           
                                                            <div class="account-form-input">
                                                                <input type="text" id="grade11" name="grade[]">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                                            <div class="account-form-label">
                                                                <label>Subject 2</label>
                                                            </div>                                                           
                                                            <div class="account-form-input">
                                                                <input type="text" id="subject12" name="subject[]">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                                            <div class="account-form-label">
                                                                <label>Grade 2</label>
                                                            </div>                                                           
                                                            <div class="account-form-input">
                                                                <input type="text" id="grade12" name="grade[]">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>                                             
                                                
                                                <div class="account-form-item mb-20">
                                                    <div class="row"> 
                                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                                            <div class="account-form-label">
                                                                <label>Subject 3</label>
                                                            </div>                                                           
                                                            <div class="account-form-input">
                                                                <input type="text" id="subject13" name="subject[]">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                                            <div class="account-form-label">
                                                                <label>Grade 3</label>
                                                            </div>                                                           
                                                            <div class="account-form-input">
                                                                <input type="text" id="grade13" name="grade[]">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                                            <div class="account-form-label">
                                                                <label>Subject 4</label>
                                                            </div>                                                           
                                                            <div class="account-form-input">
                                                                <input type="text" id="subject14" name="subject[]">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                                            <div class="account-form-label">
                                                                <label>Grade 4</label>
                                                            </div>                                                           
                                                            <div class="account-form-input">
                                                                <input type="text" id="grade14" name="grade[]">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>                                             
                                                
                                                <div class="account-form-item mb-20">
                                                    <div class="row"> 
                                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                                            <div class="account-form-label">
                                                                <label>Subject 5</label>
                                                            </div>                                                           
                                                            <div class="account-form-input">
                                                                <input type="text" id="subject15" name="subject[]">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                                            <div class="account-form-label">
                                                                <label>Grade 5</label>
                                                            </div>                                                           
                                                            <div class="account-form-input">
                                                                <input type="text" id="grade15" name="grade[]">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                                            <div class="account-form-label">
                                                                <label>Subject 6</label>
                                                            </div>                                                           
                                                            <div class="account-form-input">
                                                                <input type="text" id="subject16" name="subject[]">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                                            <div class="account-form-label">
                                                                <label>Grade 6</label>
                                                            </div>                                                           
                                                            <div class="account-form-input">
                                                                <input type="text" id="grade16" name="grade[]">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>                                             
                                                
                                                <div class="account-form-item mb-20">
                                                    <div class="row"> 
                                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                                            <div class="account-form-label">
                                                                <label>Subject 7</label>
                                                            </div>                                                           
                                                            <div class="account-form-input">
                                                                <input type="text" id="subject17" name="subject[]">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                                            <div class="account-form-label">
                                                                <label>Grade 7</label>
                                                            </div>                                                           
                                                            <div class="account-form-input">
                                                                <input type="text" id="grade17" name="grade[]">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                                            <div class="account-form-label">
                                                                <label>Subject 8</label>
                                                            </div>                                                           
                                                            <div class="account-form-input">
                                                                <input type="text" id="subject18" name="subject[]">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                                            <div class="account-form-label">
                                                                <label>Grade 8</label>
                                                            </div>                                                           
                                                            <div class="account-form-input">
                                                                <input type="text" id="grade18" name="grade[]">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>                                             
                                                
                                                <div class="account-form-item mb-20">
                                                    <div class="row"> 
                                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                                            <div class="account-form-label">
                                                                <label>Subject 9</label>
                                                            </div>                                                           
                                                            <div class="account-form-input">
                                                                <input type="text" id="subject19" name="subject[]">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                                            <div class="account-form-label">
                                                                <label>Grade 9</label>
                                                            </div>                                                           
                                                            <div class="account-form-input">
                                                                <input type="text" id="grade19" name="grade[]">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                                            <div class="account-form-label">
                                                                <label>Subject 10</label>
                                                            </div>                                                           
                                                            <div class="account-form-input">
                                                                <input type="text" id="subject20" name="subject[]">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                                            <div class="account-form-label">
                                                                <label>Grade 10</label>
                                                            </div>                                                           
                                                            <div class="account-form-input">
                                                                <input type="text" id="grade20" name="grade[]">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>                                             


                                            </div>

                                            <div id="exam3">
                                                <div class="account-form-item mb-20">
                                                    <div class="account-form-label">
                                                        <label>Name of examination</label>
                                                    </div>
                                                    <div class="account-form-input">
                                                        <input type="text" id="nameofexaminations3" name="nameofexaminations[]" placeholder="E.g School certificates:GCE, O/A level, JSS-SSS">
                                                    </div>
                                                </div> 
                                                
                                                
                                                <div class="account-form-item mb-20">
                                                    <div class="row"> 
                                                        <div class="col-lg-4 col-md-12 col-sm-12">
                                                            <div class="account-form-label">
                                                                <label>Date of examination</label>
                                                            </div>                                                           
                                                            <div class="account-form-input">
                                                                <input type="date" id="dateofexamination3" name="dateofexamination[]">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-12 col-sm-12">
                                                            <div class="account-form-label">
                                                                <label>Centre number</label>
                                                            </div>                                                           
                                                            <div class="account-form-input">
                                                                <input type="text" id="centreno3" name="centreno[]" placeholder="Centre number">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-12 col-sm-12">
                                                            <div class="account-form-label">
                                                                <label>Examination number</label>
                                                            </div>                                                           
                                                            <div class="account-form-input">
                                                                <input type="text" id="examinationno3" name="examinationno[]" placeholder="Examination number">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> 
                                                
                                                <div class="account-form-item mb-20">
                                                    <div class="account-form-label">
                                                        <label>Candidates are to indicate both letter and number grades</label>
                                                    </div>
                                                    
                                                    NB:
                                                    <li>
                                                        <span style="color:red">Mark 'A.R' in grade column if you are awaiting results of examination</span> 
                                                    </li>                                                   
                                                    <li>
                                                        <span style="color:red">It is essential for every applicants awaiting results to state centres and examination numbers</span> 
                                                    </li>                                                                         
                                                    <li>
                                                        <span style="color:red">Send a photocopy of statment of results as soon as obtained but not later than </span> 
                                                    </li>                                                                         
                                                    <li>
                                                        <span style="color:red">(HND applicant must attach evidence of at least one year post-ND relevant employment) </span> 
                                                    </li>                                                                         
                                                </div>  
                                                
                                                <div class="account-form-item mb-20">
                                                    <div class="row"> 
                                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                                            <div class="account-form-label">
                                                                <label>Subject 1</label>
                                                            </div>                                                           
                                                            <div class="account-form-input">
                                                                <input type="text" id="subject21" name="subject[]">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                                            <div class="account-form-label">
                                                                <label>Grade 1</label>
                                                            </div>                                                           
                                                            <div class="account-form-input">
                                                                <input type="text" id="grade21" name="grade[]">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                                            <div class="account-form-label">
                                                                <label>Subject 2</label>
                                                            </div>                                                           
                                                            <div class="account-form-input">
                                                                <input type="text" id="subject22" name="subject[]">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                                            <div class="account-form-label">
                                                                <label>Grade 2</label>
                                                            </div>                                                           
                                                            <div class="account-form-input">
                                                                <input type="text" id="grade22" name="grade[]">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>                                             
                                                
                                                <div class="account-form-item mb-20">
                                                    <div class="row"> 
                                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                                            <div class="account-form-label">
                                                                <label>Subject 3</label>
                                                            </div>                                                           
                                                            <div class="account-form-input">
                                                                <input type="text" id="subject23" name="subject[]">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                                            <div class="account-form-label">
                                                                <label>Grade 3</label>
                                                            </div>                                                           
                                                            <div class="account-form-input">
                                                                <input type="text" id="grade23" name="grade[]">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                                            <div class="account-form-label">
                                                                <label>Subject 4</label>
                                                            </div>                                                           
                                                            <div class="account-form-input">
                                                                <input type="text" id="subject24" name="subject[]">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                                            <div class="account-form-label">
                                                                <label>Grade 4</label>
                                                            </div>                                                           
                                                            <div class="account-form-input">
                                                                <input type="text" id="grade24" name="grade[]">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>                                             
                                                
                                                <div class="account-form-item mb-20">
                                                    <div class="row"> 
                                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                                            <div class="account-form-label">
                                                                <label>Subject 5</label>
                                                            </div>                                                           
                                                            <div class="account-form-input">
                                                                <input type="text" id="subject25" name="subject[]">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                                            <div class="account-form-label">
                                                                <label>Grade 5</label>
                                                            </div>                                                           
                                                            <div class="account-form-input">
                                                                <input type="text" id="grade25" name="grade[]">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                                            <div class="account-form-label">
                                                                <label>Subject 6</label>
                                                            </div>                                                           
                                                            <div class="account-form-input">
                                                                <input type="text" id="subject26" name="subject[]">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                                            <div class="account-form-label">
                                                                <label>Grade 6</label>
                                                            </div>                                                           
                                                            <div class="account-form-input">
                                                                <input type="text" id="grade26" name="grade[]">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>                                             
                                                
                                                <div class="account-form-item mb-20">
                                                    <div class="row"> 
                                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                                            <div class="account-form-label">
                                                                <label>Subject 7</label>
                                                            </div>                                                           
                                                            <div class="account-form-input">
                                                                <input type="text" id="subject27" name="subject[]">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                                            <div class="account-form-label">
                                                                <label>Grade 7</label>
                                                            </div>                                                           
                                                            <div class="account-form-input">
                                                                <input type="text" id="grade27" name="grade[]">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                                            <div class="account-form-label">
                                                                <label>Subject 8</label>
                                                            </div>                                                           
                                                            <div class="account-form-input">
                                                                <input type="text" id="subject28" name="subject[]">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                                            <div class="account-form-label">
                                                                <label>Grade 8</label>
                                                            </div>                                                           
                                                            <div class="account-form-input">
                                                                <input type="text" id="grade28" name="grade[]">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>                                             
                                                
                                                <div class="account-form-item mb-20">
                                                    <div class="row"> 
                                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                                            <div class="account-form-label">
                                                                <label>Subject 9</label>
                                                            </div>                                                           
                                                            <div class="account-form-input">
                                                                <input type="text" id="subject29" name="subject[]">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                                            <div class="account-form-label">
                                                                <label>Grade 9</label>
                                                            </div>                                                           
                                                            <div class="account-form-input">
                                                                <input type="text" id="grade29" name="grade[]">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                                            <div class="account-form-label">
                                                                <label>Subject 10</label>
                                                            </div>                                                           
                                                            <div class="account-form-input">
                                                                <input type="text" id="subject30" name="subject[]">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                                            <div class="account-form-label">
                                                                <label>Grade 10</label>
                                                            </div>                                                           
                                                            <div class="account-form-input">
                                                                <input type="text" id="grade30" name="grade[]">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>                                             


                                            </div>

                                            <div class="account-form-item mb-20">
                                                <div class="row col-12" style="text-align:center">
                                                    <h4 style="color:green">State Identification (For candidates of Osun state origin only)</h4>
                                                </div>                                            
                                            </div> 
                                            <div class="account-form-item mb-20">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-6 col-sm-12">
                                                        <div class="account-form-label">
                                                            <label>Local government</label>
                                                        </div>

                                                        <div class="" id="osunlga_div">
                                                            <select id='osunlga' name='osunlga' class="form-control" style='height:48px;margin-bottom:10px;' required>
                                                                <option value ='---'>---</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <!-- <div class="col-lg-6 col-md-6 col-sm-12">
                                                        <div class="account-form-label">
                                                            <label>Date</label>
                                                        </div>
                                                        <div class="account-form-input">
                                                            <input type="date" id="indigenedate" name="indigenedate">
                                                        </div>
                                                    </div> -->
                                                </div>
                                            </div>                                              

                                            <div class="account-form-item mb-20">
                                                <div class="account-form-label">
                                                    <label>Name of chairman of local governemnt</label>
                                                </div>
                                                <div class="account-form-input">
                                                    <input type="text" id="namesignature" name="namesignature">
                                                </div>
                                            </div>                                             


                                            <div class="account-form-item mb-20">
                                                <div class="row col-12" style="text-align:center">
                                                    <h4 style="color:green">Declaration</h4>
                                                    <!-- <p>I, _____________________ hereby do solemly declare that all information given in this form are to the best of my knowledge true and correct.</p>

                                                    <p>
                                                        I therefore agree that any false or incomplete information given in this form automatically disqualifies me from being considered for admission to any course of study in the College of Agriculture, Fisheries and Food Technology, Ijeda Ijesa.
                                                    </p> -->
                                                </div>                                            
                                            </div>  
                                            
                                            
                                            <div class="footer-subscribe-condition">
                                                <!-- <h4 style="color:green">Declaration</h4>                                                 -->
                                                <label class="condition_label">
                                                I hereby do solemly declare that all information given in this form are to the best of my knowledge true and correct and  therefore agree that any false or incomplete information given in this form automatically disqualifies me from being considered for admission to any course of study in the College of Agriculture, Fisheries and Food Technology, Ijeda Ijesa.

                                                    <input type="radio" id="declaration" name="declaration" required>
                                                    <span class="check_mark"></span>
                                                </label>
                                            </div>                                            
                                            

                                            <!-- <div class="account-form-item mb-20">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                                        <div class="account-form-label">
                                                            <label>__________________</label>
                                                        </div>
                                                        <div class="account-form-label">
                                                            <label>Signature of Applicant</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                                        <div class="account-form-label">
                                                            <label>__________________</label>
                                                        </div>
                                                        <div class="account-form-label">
                                                            <label>Date</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>  -->
                                            
                                            <div class="account-form-item mb-20">
                                                <div class="row col-12" style="text-align:center">
                                                    <h4 style="color:green">Attestation</h4>
                                                    <!-- <p>I hereby confirm that this applicant Mr/Mrs/Miss____________________________________ is known to me.</p>

                                                    <p>The informaton supplied in his/her form is to the best of my knowledge true and correct. </p>

                                                    <p>The attached photograph endored by me, is a true resemblance of the applicant </p> -->
                                                </div>                                            
                                            </div>  
                                            
                                            <div class="account-form-item mb-20">
                                                <div class="account-form-label">
                                                    <label>Fullname</label>
                                                </div>
                                                <div class="account-form-input">
                                                    <input type="text" id="attesterfullname" name="attesterfullname" placeholder="">
                                                </div>
                                            </div>                                             
                                            
                                            <div class="account-form-item mb-20">
                                                <div class="account-form-label">
                                                    <label>Address</label>
                                                </div>
                                                <div class="account-form-input">
                                                    <input type="text" id="attesteraddress" name="attesteraddress" placeholder="">
                                                </div>
                                            </div>                                             
                                            
                                            <div class="account-form-item mb-20">
                                                <div class="account-form-label">
                                                    <label>Position held</label>
                                                </div>
                                                <div class="account-form-input">
                                                    <input type="text" id="attesterposition" name="attesterposition" placeholder="">
                                                </div>
                                            </div>    
                                            
                                            <!-- <div class="account-form-item mb-20">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                                        <div class="account-form-label">
                                                            <label>__________________</label>
                                                        </div>
                                                        <div class="account-form-label">
                                                            <label>Signature</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                                        <div class="account-form-label">
                                                            <label>__________________</label>
                                                        </div>
                                                        <div class="account-form-label">
                                                            <label>Date</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>                                             -->
                                                                                          
                                                <!-- 
                                                <div class="account-form-item mb-15">
                                                    <div class="account-form-label">
                                                        <label>Your Password</label>
                                                        <a href="#">Forgot Password ?</a>
                                                    </div>
                                                    <div class="account-form-input account-form-input-pass">
                                                        <input type="text" placeholder="*********">
                                                        <span><i class="fa-thin fa-eye"></i></span>
                                                    </div>
                                                </div>                                            

                                                <div class="account-form-condition">
                                                    <label class="condition_label">Remember Me
                                                        <input type="checkbox">
                                                        <span class="check_mark"></span>
                                                    </label>
                                                </div> -->

                                            <div class="account-form-button">
                                                <button type="button" class="account-btn" onclick = "submitApplication()">Apply</button>
                                            </div>
                                        </form>

                                        <!-- <div class="account-break">
                                            <span>OR</span>
                                        </div>
                                        <div class="account-bottom">
                                            <div class="account-option">
                                                <a href="#" class="account-option-account">
                                                    <img src="assets/img/bg/google.png" alt="">
                                                    <span>Google</span>
                                                </a>
                                                <a href="#" class="account-option-account">
                                                    <img src="assets/img/bg/apple.png" alt="">
                                                    <span>Apple</span>
                                                </a>
                                                <a href="#" class="account-option-account">
                                                    <img src="assets/img/bg/facebook.png" alt="">
                                                    <span>Facebook</span>
                                                </a>
                                            </div>
                                            <div class="account-bottom-text">
                                                <p>Already have an account ?  <a href="sign-in.html">Sign In for here</a></p>
                                            </div>
                                        </div> -->
                                    </div>
                                    </div>
                                </div>
                            <!-- </div> -->
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- sign up area end -->

            <!-- cta area start -->
           
            <!-- cta area end -->
        </main>

        <!-- footer area start -->
        <footer class="h6_footer-area">
            <div class="footer-top pt-200 pb-30">
                <div class="container">
                   <div class="row justify-content-between">
                        <div class="col-xl-3 col-lg-3 col-md-5">
                            <div class="h6_footer-widget mb-40 mr-80">
                                <div class="footer-logo">
                                    <a href="javascript:void(0);"><img src="assets/img/logo/logo.PNG" alt=""></a>
                                </div>
                                <p class="h6_footer-widget-text">
                                    A new agro-based innovation
                                </p>
                                <!-- <div class="h6_footer-social">
                                    <ul>
                                        <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div> -->
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-5 col-md-7 d-flex flex-wrap flex-sm-nowrap justify-content-between">
                            
                            <!-- <div class="h6_footer-inner">
                                <div class="h6_footer-widget mb-40">
                                    <h5 class="h6_footer-widget-title">Class</h5>
                                    <div class="h6_footer-widget-list">
                                        <ul>
                                            <li><a href="#">Programming</a></li>
                                            <li><a href="#">Art & Design</a></li>
                                            <li><a href="#">Business</a></li>
                                            <li><a href="#">Engineering</a></li>
                                            <li><a href="#">Photography</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div> -->
                            <!-- <div class="h6_footer-inner">
                                <div class="h6_footer-widget mb-40">
                                    <h5 class="h6_footer-widget-title">Support</h5>
                                    <div class="h6_footer-widget-list">
                                        <ul>
                                            <li><a href="">Home</a></li>                                            
                                            <li><a href="javascript:void(0);">Courses</a></li>                                            
                                            <li><a href="javascript:void(0);">About</a></li>
                                            <li><a href="javascript:void(0);">Contact</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-5">
                            <div class="h6_footer-widget ml-80 mb-40"> 
                                <h5 class="h6_footer-widget-title">Our Links</h5>
                                <ul>
                                    <li><a href="">Home</a></li>                                            
                                    <li style = "margin-top:10px"><a href="courses.php">Courses</a></li>                                            
                                    <li style = "margin-top:10px"><a href="about.php">About</a></li>
                                    <li style = "margin-top:10px"><a href="contact.php">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="h6_copyright-area">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="h6_copyright-text">
                                <p>Copyright © 2023 All Rights Reserved by Jay Technologies and Innovations</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer area end -->

		<!-- JS here -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/swiper-bundle.min.js"></script>
        <script src="assets/js/jquery.meanmenu.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/jquery.nice-select.min.js"></script>
        <script src="assets/js/jquery.scrollUp.min.js"></script>
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <script src="assets/js/odometer.min.js"></script>
        <script src="assets/js/appear.min.js"></script>
        <script src="assets/js/main.js"></script>

        <script>
            $(document).ready(function(){
                
                getState();             
            });
            function submitApplication(){
                         
                var surname                     = $("#surname").val();
                var othernames                  = $("#othernames").val();
                var department                  = $("#department").val();
                var programmes                  = $("#programmes").val();
                var course                      = $("#course").val();
                var paymentInformation          = $("#paymentInformation").val();
                var postalAddress               = $("#postaladdress").val();
                var permanentHomeAddress        = $("#permanenthomeaddress").val();
                var date                        = $("#dob").val();
                var gender                      = $("#gender").val();
                var nationality                 = $("#nationality").val();
                var maritalstatus               = $("#maritalstatus").val();
                var state_div                   = $("#state").val();
                var lga_div                     = $("#lga").val();
                var maidenname                  = $("#maidenname").val();
                var noofchildren                = $("#noofchildren").val();
                var religion                    = $("#religion").val();
                var parentsurname               = $("#parentsurname").val();
                var parentothernames            = $("#parentothernames").val();
                var address                     = $("#address").val();
                var telephone                   = $("#telephone").val();
                var relationshiptoapplicant     = $("#relationshiptoapplicant").val();
                var extracurricularactivities   = $("#extracurricularactivities").val();
                var blind                       = $("#blind").val();
                var deaf                        = $("#deaf").val();
                var dumb                        = $("#dumb").val();
                var others                      = $("#others").val();
                var deafDumb                    = $("#deaf-dumb").val();
                var academichistory             = $("#academichistory").val();
                var academichistoryreason       = $("#academichistoryreason").val();
                var nameofinstitution1          = $("#nameofinstitution1").val();
                var from1                       = $("#from1").val();
                var to1                         = $("#to1").val();
                var qualification1              = $("#qualification1").val();
                var nameofinstitution2          = $("#nameofinstitution2").val();
                var from2                       = $("#from2").val();
                var to2                         = $("#to2").val();
                var qualification2              = $("#qualification2").val();
                var nameofinstitution3          = $("#nameofinstitution3").val();
                var from3                       = $("#from3").val();
                var to3                         = $("#to3").val();
                var qualification3              = $("#qualification3").val();
                var nameofinstitution4          = $("#nameofinstitution4").val();
                var from4                       = $("#from4").val();
                var to4                         = $("#to4").val();
                var qualification4              = $("#qualification4").val();
                var nameofexaminations1         = $("#nameofexaminations1").val();
                var dateofexamination1          = $("#dateofexamination1").val();
                var centreno1                   = $("#centreno1").val();
                var examinationno1              = $("#examinationno1").val();
                var grade1                      = $("#grade1").val();
                var subject1                    = $("#subject1").val();
                var subject2                    = $("#subject2").val();
                var grade2                      = $("#grade2").val();
                var subject3                    = $("#subject3").val();
                var grade3                      = $("#grade3").val();
                var subject4                    = $("#subject4").val();
                var grade4                      = $("#grade4").val();
                var subject5                    = $("#subject5").val();
                var grade5                      = $("#grade5").val();   
                var subject6                    = $("#subject6").val();
                var grade6                      = $("#grade6").val();
                var subject7                    = $("#subject7").val();
                var grade7                      = $("#grade7").val();
                var subject8                    = $("#subject8").val();
                var grade8                      = $("#grade8").val();
                var subject9                    = $("#subject9").val();
                var grade9                      = $("#grade9").val();
                var subject10                   = $("#subject10").val();
                var grade10                     = $("#grade10").val();
                var nameofexaminations2         = $("#nameofexaminations2").val();
                var dateofexamination2          = $("#dateofexamination2").val();           
                var centreno2                   = $("#centreno2").val();
                var examinationno2              = $("#examinationno2").val();
                var subject11                   = $("#subject11").val();
                var grade11                     = $("#grade11").val();
                var subject12                   = $("#subject12").val();
                var grade12                     = $("#grade12").val();
                var subject13                   = $("#subject13").val();
                var grade13                     = $("#grade13").val();
                var subject14                   = $("#subject14").val();
                var grade14                     = $("#grade14").val();
                var subject15                   = $("#subject15").val();
                var grade16                     = $("#grade16").val();
                var subject17                   = $("#subject17").val();
                var grade17                     = $("#grade17").val();
                var subject18                   = $("#subject18").val();       
                var grade18                     = $("#grade18").val();
                var subject19                   = $("#subject19").val();
                var grade19                     = $("#grade19").val();
                var subject20                   = $("#subject20").val();
                var grade20                     = $("#grade20").val();
                var nameofexaminations3         = $("#nameofexaminations3").val();
                var dateofexamination3          = $("#dateofexamination3").val();
                var centreno3                   = $("#centreno3").val();
                var examinationno3              = $("#examinationno3").val();
                var subject21                   = $("#subject21").val();
                var grade21                     = $("#grade21").val();
                var subject22                   = $("#subject22").val();
                var grade22                     = $("#grade22").val();
                var subject23                   = $("#subject23").val();
                var grade23                     = $("#grade23").val();
                var subject24                   = $("#subject24").val();
                var grade24                     = $("#grade24").val();
                var subject25                   = $("#subject25").val();
                var grade25                     = $("#grade25").val();
                var subject26                   = $("#subject26").val();
                var grade26                     = $("#grade26").val();
                var subject27                   = $("#subject27").val();
                var grade27                     = $("#grade27").val();
                var subject28                   = $("#subject28").val();
                var grade28                     = $("#grade28").val();
                var subject29                   = $("#subject29").val();
                var grade29                     = $("#grade29").val();
                var subject30                   = $("#subject30").val();
                var grade30                     = $("#grade30").val();
                var osunlga                     = $("#osunlga").val();
                var namesignature               = $("#namesignature").val();
                var attesterfullname            = $("#attesterfullname").val();
                var attesteraddress             = $("#attesteraddress").val();
                var attesterposition            = $("#attesterposition").val();
                var blindApplicantStatus        = (document.getElementById("blind").checked);
                var otherApplicantStatus        = document.getElementById("others").checked;    
                var deafAndDumbApplicantStatus  = document.getElementById("deaf-dumb").checked;
                var dumbApplicantStatus         = document.getElementById("dumb").checked;
                var deafApplicantStatus         = document.getElementById("deaf").checked;
                var declarationButton           = document.getElementById("declaration").checked;

             
                // Removed osun lg and signature because it should be optional.
                if(surname == ''){
                    alert('Surname is required');
                }else if(othernames == ''){
                    alert('Othername is required');
                }else if(paymentInformation == ''){
                    alert('Paymentinformation is required');
                }else if(postalAddress == ''){
                    alert('Postal address is required');
                }else if(permanentHomeAddress == ''){
                    alert('Permanent home address is required');
                }else if(date == ''){
                    alert('Date of birth is required');
                }
                // if( ||  ||  ||  == '' || date == '' || gender == '' || nationality == '' || maritalstatus == '' || state_div == '' || lga_div == '' || maidenname == '' || noofchildren == '' || religion == '' || parentsurname == '' || parentothernames == '' || address == '' || telephone == '' || relationshiptoapplicant == '' || extracurricularactivities == ''  || academichistory == '' || academichistoryreason == '' || nameofinstitution1 == '' || from1 == '' || to1 == '' || qualification1 == '' || nameofinstitution2 == '' || from2 == '' || to2 == '' || qualification2 == '' || nameofinstitution3 == '' || from3 == '' || to3 == '' || qualification3 == '' || nameofinstitution4 == '' || from4 == '' || to4 == '' || qualification4 == '' || nameofexaminations1 == '' || dateofexamination1 == '' || centreno1 == '' || examinationno1 == '' || subject1 == '' || subject2 == '' || grade2 == '' ||  subject3 == '' || grade3 == '' || subject4 == '' || grade4 == '' || subject5 == '' || grade5 == '' || subject6 == '' || grade6 == '' || subject7 == '' || grade7 == '' || subject8 == '' || grade8 == '' || subject9 == '' || grade9 == '' || subject10 == '' || grade10 == '' || nameofexaminations2 == '' || dateofexamination2 == '' || centreno2 == '' || examinationno2 == '' || subject11 == '' || grade11 == '' || subject12 == '' || grade12 == '' || subject13 == '' || grade13 == '' || subject14 == '' || grade14 == '' || subject15 == '' || grade16 == '' || subject17 == '' || grade17 == '' || subject18 == '' || grade18 == '' || subject19 == '' || grade19 == '' || subject20 == '' || grade20 == '' || nameofexaminations3 == '' || dateofexamination3 == '' || centreno3 == '' || examinationno3 == '' || subject21 == '' || grade21 == '' || subject22 == '' || grade22 == '' || subject23 == '' || grade23 == '' || subject24 == '' || grade24 == '' || subject25 == '' || grade25 == '' || subject26 == '' || grade26 == '' || subject27 == '' || grade27 == '' || subject28 == '' || grade28 == '' || subject29 == '' || grade29 == '' || subject30 == '' || attesterfullname == '' || attesteraddress == '' || attesterposition == '' ||  == '' ||  == '' ||  == '' || grade1 == ''){
                //     alert('Please fill up the form');
                // }else{
                //     ApplicantStatus = '';
                //     if(blindApplicantStatus == false){
                //     }else{
                //         ApplicantStatus = 'blind';
                //     }
                //     if(otherApplicantStatus == false){   
                //     }else{
                //         ApplicantStatus = 'others';
                //     }
                //     if(deafAndDumbApplicantStatus == false){                     
                //     }else{
                //         ApplicantStatus = 'deaf and dumb';
                //     }

                //     if(dumbApplicantStatus == false){
                        
                //     }else{
                //         ApplicantStatus = 'dumb';
                //     }

                //     if(deafApplicantStatus == false){
                        
                //     }else{
                //         ApplicantStatus = 'deaf';
                //     }

                //     if(ApplicantStatus == ''){
                //         alert('Please choose from the special applicants');
                //     }else{
                //         if(nationality == '---'){
                //             alert('Please select a valid nationality');
                //         }else if(maritalstatus == '---'){
                //             alert('Please select a valid marital status');
                //         }else if(department == '---'){
                //             alert('Please select a valid department');
                //         }else if(programmes == '---'){
                //             alert('Please select a valid programme');
                //         }else if(course == '---'){
                //             alert('Please select a valid course');
                //         }else if(religion == '---'){
                //             alert('Please select a valid religion');
                //         }else if(declarationButton == false){
                //             alert('Confirm all information are true under declaration');
                //         }else{
                //             var data = $("form#account-form")[0]; 	
                //             var formData = new FormData(data);
                //             $.ajax({                                
                //                 url: "app/processApplication.php",
                //                 type: 'POST',
                //                 data: formData,
                //                 async: false,
                //                 cache: false,
                //                 contentType: false,
                //                 processData: false,
                //                 success: function (e){  
                //                     // alert(e);
                //                     if(e == 2){
                //                         alert("Record sent successfully");
                //                         ClearFields();
                //                     }else if (e == -2){
                //                         alert("Error sending records");
                //                     }else {
                //                         alert("Something went wrong, please contact the system admininstrator");
                //                     }
                //                 }
                //             });	
                //         }
                //     }
                        
                // }
            }

            function ClearFields(){
                $("#applicant_image_hidden_tag").val("F");
                $("#applicantImageSRC").attr('src', 'assets/img/noimage.png' + `?v=${new Date().getTime()}`);
                $("#surname").val('');
                $("#othernames").val('');
                $("#department").val('');
                $("#programmes").val('');
                $("#course").val('');
                $("#paymentInformation").val('');
                $("#postaladdress").val('');
                $("#permanenthomeaddress").val('');
                $("#dob").val('');
                $("#gender").val('');
                $("#nationality").val('');
                $("#maritalstatus").val('');
                $("#state").val('');
                $("#lga").val('');
                $("#maidenname").val('');
                $("#noofchildren").val('');
                $("#religion").val('');
                $("#parentsurname").val('');
                $("#parentothernames").val('');
                $("#address").val('');
                $("#telephone").val('');
                $("#relationshiptoapplicant").val('');
                $("#extracurricularactivities").val('');
                $("#blind").val('');
                $("#deaf").val('');
                $("#dumb").val('');
                $("#others").val('');
                $("#deaf-dumb").val('');
                $("#academichistory").val('');
                $("#academichistoryreason").val('');
                $("#nameofinstitution1").val('');
                $("#from1").val('');
                $("#to1").val('');
                $("#qualification1").val('');
                $("#nameofinstitution2").val('');
                $("#from2").val('');
                $("#to2").val('');
                $("#qualification2").val('');
                $("#nameofinstitution3").val('');
                $("#from3").val('');
                $("#to3").val('');
                $("#qualification3").val('');
                $("#nameofinstitution4").val('');
                $("#from4").val('');
                $("#to4").val('');
                $("#qualification4").val('');
                $("#nameofexaminations1").val('');
                $("#dateofexamination1").val('');
                $("#centreno1").val('');
                $("#examinationno1").val('');
                $("#grade1").val('');
                $("#subject1").val('');
                $("#subject2").val('');
                $("#grade2").val('');
                $("#subject3").val('');
                $("#grade3").val('');
                $("#subject4").val('');
                $("#grade4").val('');
                $("#subject5").val('');
                $("#grade5").val('');   
                $("#subject6").val('');
                $("#grade6").val('');
                $("#subject7").val('');
                $("#grade7").val('');
                $("#subject8").val('');
                $("#grade8").val('');
                $("#subject9").val('');
                $("#grade9").val('');
                $("#subject10").val('');
                $("#grade10").val('');
                $("#nameofexaminations2").val('');
                $("#dateofexamination2").val('');           
                $("#centreno2").val('');
                $("#examinationno2").val('');
                $("#subject11").val('');
                $("#grade11").val('');
                $("#subject12").val('');
                $("#subject13").val('');
                $("#grade13").val('');
                $("#subject14").val('');
                $("#grade14").val('');
                $("#subject15").val('');
                $("#grade16").val('');
                $("#subject17").val('');
                $("#grade17").val('');
                $("#subject18").val('');       
                $("#grade18").val('');
                $("#subject19").val('');
                $("#grade19").val('');
                $("#subject20").val('');
                $("#grade20").val('');
                $("#nameofexaminations3").val('');
                $("#dateofexamination3").val('');
                $("#centreno3").val('');
                $("#examinationno3").val('');
                $("#subject21").val('');
                $("#grade21").val('');
                $("#subject22").val('');
                $("#grade22").val('');
                $("#subject23").val('');
                $("#grade23").val('');
                $("#subject24").val('');
                $("#grade24").val('');
                $("#subject25").val('');
                $("#grade25").val('');
                $("#subject26").val('');
                $("#grade26").val('');
                $("#subject27").val('');
                $("#grade27").val('');
                $("#subject28").val('');
                $("#grade28").val('');
                $("#subject29").val('');
                $("#grade29").val('');
                $("#subject30").val('');
                $("#grade30").val('');
                $("#osunlga").val('');
                $("#namesignature").val('');
                $("#attesterfullname").val('');
                $("#attesteraddress").val('');
                $("#attesterposition").val('');
            }
            function getState(){
                alert(4);
                $.get("app/getstates.php").done(function(data){
                    var select = ""; var option = "";
                    select +="<select id='state' name='state' class='form-control' style='height:48px;margin-bottom:10px;' onclick='getLGAs(this.value)' required/>";
                    
                    if(data != "" && data != 0){
                        var data = $.parseJSON(data);
                        // console.log(data);
                        option += "<option value='---'>---</option>";   
                        for(var i = 0; i < data.length; i++){
                            option += "<option  value='"+data[i].statename+"'>"+data[i].statename+"</option>";
                        }
                    }else{
                        option += "<option value='---'>---</option>";  
                    }
                    select += option;
                    select += "</select>";
                    $("#state_div").append(select);
                });
            } 

            // get LGAs
            function getLGAs(getState){

                if(getState !== '---'){
                   
                    $.get("app/getlgas.php", 'sentState=' + getState).done(function(data){
                        // alert(data);
                        var select = ""; var option = "";
                        select +="<select id='lga' name='lga' class='form-control' style='height:43px;margin-bottom:10px;' required/>";
                        if(data != "" && data != 0){
                            var data = $.parseJSON(data);
                            option += "<option value='---'>---</option>";   
                            for(var i = 0; i < data.length; i++){
                                option += "<option  value='"+data[i].lg+"'>"+data[i].lg+"</option>";
                            }
                        }else{
                            option += "<option value='---'>---</option>";  
                        }
                        select += option;
                        select += "</select>";
                        $("#lga").remove();					
                        $("#lga_div").append(select);					

                    });
                }
            }   
            
            function preveiwImage(getImage){
			var fileType = document.getElementById('applicantImage').files[0].type;
			var fileSize = document.getElementById('applicantImage').files[0].size;
			/*******CONVERT IMAGE FILE TO KILOBYTE*******/

            
            
			var fileSize = Math.floor(fileSize/(1024));
			if (getImage.files && getImage.files[0]) 
			{
				if(fileType == 'image/jpg' || fileType == 'image/jpeg' || fileType == 'image/png')
				{
					/******IMAGE SIZE MUST NOT BE MORE THAN 500 KB******/
					if(fileSize<501)    
					{
						var imgReader = new FileReader();
						imgReader.onload = function(e) 
						{
							$('#applicantImageSRC').attr('src', e.target.result);
							$("#applicant_image_hidden_tag").val("T");
						}
						imgReader.readAsDataURL(getImage.files[0]);       
					}
					else
					{
                        alert("Image Size too large for Upload, Must not be more than 500KB!");                        
                        $("#applicant_image_hidden_tag").val("F");
						$("#applicantImage").val('');
					}
				}  
				else
				{
                    alert("File format not Supported/Allowed for Upload!, Please Choose another.");                     
					$("#applicantImage").val('');
                    $("#applicant_image_hidden_tag").val("F");
				}
			}
		}               
            
        </script>
    </body>


</html>