<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['resume_maker_uid']==0)) {
  header('location:logout.php');
  } else{

if(isset($_POST['update']))
  {

  $fname=$_POST['fname'];
  $fprof=$_POST['fprof'];
  $femail=$_POST['femail'];
  $fphone=$_POST['fphone'];

  $mname=$_POST['mname'];
  $mprof=$_POST['mprof'];
  $memail=$_POST['memail'];
  $mphone=$_POST['mphone'];

  $sname=$_POST['sname'];
  $sprof=$_POST['sprof'];
  $semail=$_POST['semail'];
  $sphone=$_POST['sphone'];?>

                        <?php
                            if(isset($_SESSION["resume_maker_uid"])){
                            $ret=mysqli_query($con,"select FullName from tblstudent where ID='$_SESSION[resume_maker_uid]'");
                            while($row=mysqli_fetch_array($ret))
                            {$stu_name= $row['FullName'];}}
     
    $query=mysqli_query($con, "update tblfamily set FatherName='$fname', FatherProfession='$fprof', FatherPhone='$fphone', FatherEmail='$femail', MotherName='$mname', MotherProfession='$mprof', MotherPhone='$mphone', MotherEmail='$memail', SiblingName='$sname', SiblingProfession='$sprof', SiblingPhone='$sphone', SiblingEmail='$semail' where FullName='$stu_name'");
    if ($query) {
    echo '<script>alert("Family Detail has been updated.")</script>';
    echo "<script>window.location.href ='add-family.php'</script>";
  }
  else
    {
        echo '<script>alert("Something Went Wrong. Please try again")</script>';
    }

  
}
  ?>
<!DOCTYPE html>
<html lang="zxx">
<head>
   
    <title>RESUME MAKER WEBSITE-Manage Family Detail</title>
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
                        <img src="https://img.icons8.com/emoji/20/000000/family--man-woman-girl-girl.png"/>
                        Update Family Detail
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
                            <p>Family Detail</p>
                        </div>
                        <div class="card-body b-b">

                            <form method="post">
                               
  <?php
if(isset($_SESSION["resume_maker_uid"])){
$ret=mysqli_query($con,"select FullName from tblstudent where ID='$_SESSION[resume_maker_uid]'");
while($row=mysqli_fetch_array($ret))
{$stu_name= $row['FullName'];}}?>


  <?php
$ret=mysqli_query($con,"select * from tblfamily where FullName='$stu_name'");
$num=mysqli_num_rows($ret);
$cnt=1;
if($num>0){
while ($row=mysqli_fetch_array($ret)) {

?> 
                                <table class="table table-bordered table-hover data-tables">
  
<tr>
  <th>#</th>
   <th>Name</th>
   <th>Profession</th>
    <th>Email</th>
     <th>Phone Number</th>

</tr>
<tr>
<th>Father</th>
<td>   <input class="form-control white_bg" id="fname" name="fname" value="<?php  echo $row['FatherName'];?>"  type="text" required='true'></td>
<td>   <input class="form-control white_bg" id="fprof" name="fprof" value="<?php  echo $row['FatherProfession'];?>"  type="text" required='true'></td>
<td>   <input class="form-control white_bg" id="femail" name="femail" value="<?php  echo $row['FatherEmail'];?>"  type="text" required='true'></td>
<td>   <input class="form-control white_bg" id="fphone" name="fphone" value="<?php  echo $row['FatherPhone'];?>"  type="text" required='true'></td>
</tr>
<tr>
<th>Mother</th>
<td>   <input class="form-control white_bg" id="mname" name="mname" value="<?php  echo $row['MotherName'];?>"  type="text" required='true'></td>
<td>   <input class="form-control white_bg" id="mprof" name="mprof" value="<?php  echo $row['MotherProfession'];?>"  type="text" required='true'></td>
<td>   <input class="form-control white_bg" id="memail" name="memail" value="<?php  echo $row['MotherEmail'];?>"  type="text" required='true'></td>
<td>   <input class="form-control white_bg" id="mphone" name="mphone" value="<?php  echo $row['MotherPhone'];?>"  type="text" required='true'></td>
</tr>
<tr>
<th>Sibling</th>
<td>   <input class="form-control white_bg" id="sname" name="sname" value="<?php  echo $row['SiblingName'];?>"  type="text" required='true'></td>
<td>   <input class="form-control white_bg" id="sprof" name="sprof" value="<?php  echo $row['SiblingProfession'];?>"  type="text" required='true'></td>
<td>   <input class="form-control white_bg" id="semail" name="semail" value="<?php  echo $row['SiblingEmail'];?>"  type="text" required='true'></td>
<td>   <input class="form-control white_bg" id="sphone" name="sphone" value="<?php  echo $row['SiblingPhone'];?>"  type="text" required='true'></td>

</tr>
</table>


       <?php } ?>                        <hr />
 <button type="submit" class="btn btn-primary" name="update">Update</button>
</form>
<?php } else {?>
<h3 align="center" style="color:red">No Record found</h3>
 <?php } ?>   
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