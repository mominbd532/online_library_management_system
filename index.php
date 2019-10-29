<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Online Library Management System | Home</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- MOMIN STYLE  -->
    <link  href="assets/css/momin.css" rel="stylesheet"/>
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body>
      <!------MENU SECTION START-->
<?php include('includes/header.php');?>
<!-- MENU SECTION END-->
    <!-- Header -->
<header class="display-container content wide" style="max-width:1500px;" id="home">
  <img class="image" src="assets/img/book1.jpg" alt="Book" width="1500" height="800">
  <div class="display-middle margin-top center">
    <h1 class="xxlarge text-white"><span class="padding black opacity-min"><b>Uttara University</b></span> <span class="hide-small text-black">Central Library</span></h1>
  </div>
</header>

<!-- Page content -->
<div class="content padding" style="max-width:1564px">

  <!-- Project Section -->
  <div class="container padding-32" id="catagory">
    <h3 class="border-bottom border-light-grey padding-16">Catagory</h3>
  </div>

  <div class="row-padding">
    <div class="col l3 m6 margin-bottom">
      <div class="display-container">
        <div class="display-topleft black padding">Bangla</div>
        <img src="assets/img/bangla.jpg" alt="bangla" style="width:100%">
      </div>
    </div>
    <div class="col l3 m6 margin-bottom">
      <div class="display-container">
        <div class="display-topleft black padding">English</div>
        <img src="assets/img/english.jpg" alt="english" style="width:100%">
      </div>
    </div>
    <div class="col l3 m6 margin-bottom">
      <div class="display-container">
        <div class="display-topleft black padding">Math</div>
        <img src="assets/img/math.jpg" alt="math" style="width:100%">
      </div>
    </div>
    <div class="col l3 m6 margin-bottom">
      <div class="display-container">
        <div class="display-topleft black padding">Physics</div>
        <img src="assets/img/physics.jpg" alt="physics" style="width:100%">
      </div>
    </div>
  </div>

  <div class="row-padding">
    <div class="col l3 m6 margin-bottom">
      <div class="display-container">
        <div class="display-topleft black padding">Chemistry</div>
        <img src="assets/img/chemistry.jpg" alt="chemistry" style="width:99%">
      </div>
    </div>
    <div class="col l3 m6 margin-bottom">
      <div class="display-container">
        <div class="display-topleft black padding">Biology</div>
        <img src="assets/img/biology.jpg" alt="biology" style="width:99%">
      </div>
    </div>
    <div class="col l3 m6 margin-bottom">
      <div class="display-container">
        <div class="display-topleft black padding">Accounting</div>
        <img src="assets/img/accounting.jpg" alt="accounting" style="width:99%">
      </div>
    </div>
    <div class="col l3 m6 margin-bottom">
      <div class="display-container">
        <div class="display-topleft black padding">Computer</div>
        <img src="assets/img/computer.jpg" alt="computer" style="width:99%">
      </div>
    </div>
  </div>

  <!-- About Section -->
  <div class="container padding-32" id="about">
    <h3 class="border-bottom border-light-grey padding-16">About Us</h3>
    <p>Our Library is centrally located at uttara in the Uttara University campus. Our location connects us the dhaka city and makes the library a part of the fabric of the country's best educational institution.We offer a combination of online and offline books and other items to provide you with a comprehensive information service for your recreational and professional needs.
    </p>
  </div>

  <div class="row-padding w3-grayscale">
    <div class="col l3 m6 margin-bottom">
      <img src="assets/img/tanzila.jpg" alt="Tanzila Wahid" style="width:100%">
      <h3>Tanzila Wahid</h3>
      <p class="opacity">Project Supervisor</p>
      <p style="font-size: 20px;">I am supervised this project.</p><br>
      <p><button class="button light-grey block">Contact</button></p>
    </div>
    <div class="col l3 m6 margin-bottom">
      <img src="assets/img/momin.jpg" alt="Md. Mominul Islam" style="width:100%">
      <h3>Md. Mominul Islam</h3>
      <p class="opacity">Team Leader</p>
      <p style="font-size: 20px;">I am team leader of this project.</p>
      <p><button class="button light-grey block">Contact</button></p>
    </div>
    <div class="col l3 m6 margin-bottom">
      <img src="assets/img/ripon.jpg" alt="Ripan Chandra Banik" style="width:100%">
      <h3>Ripan Chandra Banik</h3>
      <p class="opacity">Project Menber</p>
      <p style="font-size: 20px;">I am team member of this project.</p>
      <p><button class="button light-grey block">Contact</button></p>
    </div>
    <div class="col l3 m6 margin-bottom">
      <img src="assets/img/pallab.jpg" alt="Pallab Kumer Shingh" style="width:100%">
      <h3>Pallab Kumer Shingh</h3>
      <p class="opacity">Project Member</p>
      <p style="font-size: 20px;">I am team member of this project,</p>
      <p><button class="button light-grey block">Contact</button></p>
    </div>
  </div>
     <!-- CONTENT-WRAPPER SECTION END-->
<?php include('includes/footer.php');?>
      <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
      <!-- CUSTOM SCRIPTS  -->
    <script src="assets/js/custom.js"></script>
</body>
</html>
