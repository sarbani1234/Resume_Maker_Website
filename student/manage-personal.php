<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['resume_maker_uid']==0)) {
  header('location:logout.php');
  } else{
    if(isset($_POST['update']))
  {
  $name=$_POST['name'];
  $email=$_POST['email'];
  $age=$_POST['age'];
  $pob=$_POST['pob'];
  $phone=$_POST['phone'];
  $addr=$_POST['addr'];
  $zip=$_POST['zip'];
  $city=$_POST['city'];
  $state=$_POST['state'];
  $gender=$_POST['gender'];
  $country=$_POST['country'];
  $nationality=$_POST['nationality'];
  $religion=$_POST['religion'];
  $mstatus=$_POST['mstatus'];
  $link=$_POST['link'];
  $git=$_POST['git'];
  $web=$_POST['web'];
  $dl=$_POST['dl'];?>
                      <?php
if(isset($_SESSION["resume_maker_uid"])){
$ret=mysqli_query($con,"select FullName from tblstudent where ID='$_SESSION[resume_maker_uid]'");
while($row=mysqli_fetch_array($ret))
{$stu_name= $row['FullName'];}}
  
     $query=mysqli_query($con, "update tblresume set FullName='$name', Email='$email', Age='$age', PlaceOfBirth='$pob', PhoneNumber='$phone', Address='$addr', ZipCode='$zip', City='$city', State='$state', Country='$country', DrivingLicense='$dl', Gender='$gender', Nationality='$nationality', Religion='$religion', Linkedln='$link', Website='$web', GitHub='$git', MStatus='$mstatus' where FullName='$stu_name'");
    if ($query) {
    echo "<script>alert('Personal details has been updated successfully');</script>";
  }
  else
    {
      echo "<script>alert('Something went wrong. Please try again!');</script>";
    }
  }
  ?>
<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>RESUME MAKER WEBSITE-Manage Personal Detail</title>
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
                        <i class="icon icon-account_box light-green-text s-18"></i>
                        Personal Details
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
                            <form method="post">
   <?php
if(isset($_SESSION["resume_maker_uid"])){
$ret=mysqli_query($con,"select FullName from tblstudent where ID='$_SESSION[resume_maker_uid]'");
while($row=mysqli_fetch_array($ret))
{$name= $row['FullName'];
 $dob=$row['DOB'];} }?>
                              
  
  <?php
$ret=mysqli_query($con,"select * from tblresume where FullName='$name'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4" class="col-form-label">Full Name</label>
                                        <input type="text" class="form-control" id="name" name="name" required="true" 
                                               value="<?php  echo $row['FullName'];?>">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4" class="col-form-label">Email </label>
                                        <input type="email" class="form-control" id="email" name="email" 
                                               value="<?php  echo $row['Email'];?>" required="true">

                                    </div>
                                    
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4" class="col-form-label">Age </label>
                                        <input type="text" class="form-control" id="age" name="age" 
                                               value="<?php  echo $row['Age'];?>" required="true">

                                    </div>


                              <div class="form-group col-md-6">
                                        <label for="inputPassword4" class="col-form-label">Place of Birth </label>
                                        <input type="text" class="form-control" id="pob" name="pob" 
                                               value="<?php  echo $row['PlaceOfBirth'];?>" required="true">

                                    </div> 
                             <div class="form-group col-md-6">
                                        <label for="inputPassword4" class="col-form-label">Phone Number</label>
                                        <input type="text" class="form-control" id="phone" name="phone" 
                                               value="<?php  echo $row['PhoneNumber'];?>" required="true">

                                    </div>
                                    <div class="form-group col-md-6">
              <label for="inputPassword4" class="col-form-label">&nbsp;&nbsp;&nbsp;Gender: </label><br>
              <?php  if($row['Gender']=="Female"){ ?>
              &nbsp;&nbsp;&nbsp;<input type="radio" name="gender" id="gender" value="Female" checked="true">&nbsp;&nbsp;&nbsp;Female
              &nbsp;&nbsp;&nbsp;<input type="radio" name="gender" id="gender" value="male">&nbsp;&nbsp;&nbsp;Male
              <?php } else { ?>
              <label>
              &nbsp;&nbsp;&nbsp;<input type="radio" name="gender" id="gender" value="Male" checked="true">&nbsp;&nbsp;&nbsp;Male
              &nbsp;&nbsp;&nbsp;<input type="radio" name="gender" id="gender" value="Female">&nbsp;&nbsp;&nbsp;Female
              </label>
             <?php } ?>
            </div>


                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4" class="col-form-label">Address </label>
                                        <input type="text" class="form-control" id="addr" name="addr" 
                                               value="<?php  echo $row['Address'];?>" required="true">

                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4" class="col-form-label">Zip Code </label>
                                        <input type="text" class="form-control" id="zip" name="zip" 
                                               value="<?php  echo $row['ZipCode'];?>" required="true">

                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4" class="col-form-label">City/Town </label>
                                        <input type="text" class="form-control" id="city" name="city" 
                                               value="<?php  echo $row['City'];?>" required="true">

                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4" class="col-form-label">State </label>
                                        <input type="text" class="form-control" id="state" name="state" 
                                               value="<?php  echo $row['State'];?>" required="true">

                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4" class="col-form-label">Country </label>
                                        <input type="text" class="form-control" id="country" name="country" 
                                               value="<?php  echo $row['Country'];?>" required="true">

                                    </div>
                                   
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4" class="col-form-label">Marital Status </label>
                                        <input type="text" class="form-control" id="mstatus" name="mstatus" 
                                               value="<?php  echo $row['MStatus'];?>" required="true">

                                    </div>
                                     <div class="form-group col-md-6">
                                        <label for="inputPassword4" class="col-form-label">Religion </label>
                                        <input type="text" class="form-control" id="religion" name="religion" 
                                               value="<?php  echo $row['Religion'];?>" required="true">

                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4" class="col-form-label">Nationality </label>
                                        <input type="text" class="form-control" id="nationality" name="nationality" 
                                               value="<?php  echo $row['Nationality'];?>" required="true">

                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4" class="col-form-label">Driving License </label>
                                        <input type="text" class="form-control" id="dl" name="dl" 
                                               value="<?php  echo $row['DrivingLicense'];?>" required="true">

                                    </div>
                                    <div class="card-title" style="padding-top: 20px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Photo</div>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/<?php echo $row['Images'];?>" width="200" height="150" value="<?php  echo $row['Images'];?>"><a href="changeimage.php?editid=<?php echo $row['ID'];?>"> &nbsp; Edit Image</a>
                                </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4" class="col-form-label">Linkedln </label>
                                        <input type="text" class="form-control" id="link" name="link" 
                                               value="<?php  echo $row['Linkedln'];?>" required="true">

                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4" class="col-form-label">GitHub </label>
                                        <input type="text" class="form-control" id="git" name="git" 
                                               value="<?php  echo $row['GitHub'];?>" required="true">

                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4" class="col-form-label">Website </label>
                                        <input type="text" class="form-control" id="web" name="web" 
                                               value="<?php  echo $row['Website'];?>" required="true">

                                    </div>
                                   
                                 <div class="form-group">
                                    
                                </div>
                               <?php } ?>
                               <hr /><hr />
                                <button type="submit" name="update" class="btn btn-primary">Update</button>
                            </form>
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
<?php } ?>