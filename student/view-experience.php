<?php  
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['resume_maker_uid']==0)) {
  header('location:logout.php');
  } else{
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
   
    <title>RESUME MAKER WEBSITE-View Work Experience or Internships Details</title>
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/app.css">
    <style>
        .loader {
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: #F5F8FA;
            z-index: 9998;
            text-align: center;
        }

        .plane-container {
            position: absolute;
            top: 50%;
            left: 50%;
        }
   
    </style>
    <script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
</head>
<body class="light">
<!-- Pre loader -->
<div id="loader" class="loader">
    <div class="plane-container">
        <div class="preloader-wrapper small active">
            <div class="spinner-layer spinner-blue">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>

            <div class="spinner-layer spinner-red">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>

            <div class="spinner-layer spinner-yellow">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>

            <div class="spinner-layer spinner-green">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>
        </div>
    </div>
</div>
<div id="app">
<?php include_once('includes/sidebar.php');?>
<!--Sidebar End-->
<?php include_once('includes/header.php');?>
    <div class="page has-sidebar-left">
    <header class="blue accent-3 relative">
        <div class="container-fluid text-white">
            <div class="row p-t-b-10 ">
                <div class="col">
                    <h4>
                        <img src="https://img.icons8.com/officexs/16/000000/audio-book.png"/>
                        History of Internship Details
                    </h4>
                </div>
            </div>
        </div>
    </header>

    <div class="animatedParent animateOnce">
        <div class="container-fluid my-3">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                    
                        <div class="card-body b-b">
                            <p>History of Internship Details</p>
                        </div>
                        <div class="card-body b-b">                         
 
 <?php
$vid=$_GET['viewid'];
$ret=mysqli_query($con,"select * from tblinternship where ID='$vid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
<table class="table table-bordered table-hover data-tables">
    <tr>
  <th width="200">Job Title</th>
  <td><?php  echo $row['JobTitle'];?></td>
 </tr>
 <tr>
  <th width="200">Job Location</th>
  <td><?php  echo $row['JobLocation'];?></td>
</tr>
<tr>
  <th>Company Name</th>
  <td><?php  echo $row['CompanyName'];?></td>
  </tr>
   <tr>
  <th>Descriptions</th>
  <td colspan="3"><?php  echo $row['Description'];?></textarea></td>
  </tr>
  <tr>
  <th>Start Date</th>
  <td><?php  echo $row['StartDate'];?></td>
   </tr>
   <tr>
  <th>End Date</th>
  <td><?php  echo $row['EndDate'];?></td>
  </tr>
  <tr>
  <th>Internship Apply Date</th>
  <td><?php  echo $row['InternshipUpdationDate'];?></td>
</tr>
  </table>
<?php } ?>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="control-sidebar-bg shadow white fixed"></div>
</div>
<!--/#app -->
<script src="assets/js/app.js"></script>

</body>
</html>
<?php }  ?>