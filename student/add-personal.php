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
   
    <title>RESUME MAKER WEBSITE-Add Personal Details</title>
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
                        Add Personal Details
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
                            <p>Personal Details</p>
                        </div>
                        <div class="card-body b-b">
                            <form  action="" name="personal_details" method="post" onsubmit="return checkpass();" enctype="multipart/form-data">
                                 <?php
if(isset($_SESSION["resume_maker_uid"])){
$ret=mysqli_query($con,"select FullName from tblstudent where ID='$_SESSION[resume_maker_uid]'");
while($row=mysqli_fetch_array($ret))
{$name= $row['FullName'];} }?>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4" class="col-form-label">Full Name</label>
                                        <input type="text" class="form-control" id="name" name="name" required="true" 
                                               value="<?php  echo $name;?>">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4" class="col-form-label">Email </label>
                                        <input type="email" class="form-control" id="email" name="email" 
                                               placeholder="Email" required="true">

                                    </div>

                                     <div class="card-title" style="padding-top: 20px">Date Of Birth</div>
                            <div class="input-group">
                                <input type="text" class="date-time-picker form-control"
                                       data-options='{"timepicker":false, "format":"d-m-Y"}' value="2018/06/01"/ id="dob" name="dob" required="true">
                                <span class="input-group-append">
                                    <span class="input-group-text add-on white">
                                        <i class="icon-calendar"></i>
                                    </span>
                                </span>
                            </div>
                                    

                              <div class="card-title" style="padding-top: 20px">Place Of Birth</div>
                            <div class="input-group">
                                <input type="text" class="form-control" id="pob" name="pob" required="true" placeholder="Place of birth">
                                <span class="input-group-append">
                                </span>
                            </div>  
                             <div class="form-group col-md-6">
                                        <label for="inputPassword4" class="col-form-label">Phone Number</label>
                                        <input type="text" class="form-control" id="phone" name="phone" 
                                               placeholder="Phone Number" required="true">

                                    </div>
                                    <div class="form-group col-md-6">
              <label for="inputPassword4" class="col-form-label">&nbsp;&nbsp;&nbsp;Gender: </label><br>
              &nbsp;&nbsp;&nbsp;<input type="radio" name="gender" id="gender" value="Female" checked="true">&nbsp;&nbsp;&nbsp;Female
              &nbsp;&nbsp;&nbsp;<input type="radio" name="gender" id="gender" value="male">&nbsp;&nbsp;&nbsp;Male
            </div>


                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4" class="col-form-label">Address </label>
                                        <input type="text" class="form-control" id="addr" name="addr" 
                                               placeholder="Address" required="true">

                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4" class="col-form-label">Zip Code </label>
                                        <input type="text" class="form-control" id="zip" name="zip" 
                                               placeholder="Zip Code" required="true">

                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4" class="col-form-label">City/Town </label>
                                        <input type="text" class="form-control" id="city" name="city" 
                                               placeholder="City" required="true">

                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4" class="col-form-label">State </label>
                                        <input type="text" class="form-control" id="state" name="state" 
                                               placeholder="State" required="true">

                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4" class="col-form-label">Country </label>
                                        <input type="text" class="form-control" id="country" name="country" 
                                               placeholder="County" required="true">

                                    </div>
                                   
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4" class="col-form-label">Marital Status </label>
                                        <input type="text" class="form-control" id="mstatus" name="mstatus" 
                                               placeholder="Marital Status" required="true">

                                    </div>
                                     <div class="form-group col-md-6">
                                        <label for="inputPassword4" class="col-form-label">Religion </label>
                                        <input type="text" class="form-control" id="religion" name="religion" 
                                               placeholder="Religion" required="true">

                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4" class="col-form-label">Nationality </label>
                                        <input type="text" class="form-control" id="nationality" name="nationality" 
                                               placeholder="Nationality" required="true">

                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4" class="col-form-label">Driving License </label>
                                        <input type="text" class="form-control" id="dl" name="dl" 
                                               placeholder="Driving License" required="true">

                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4" class="col-form-label">Linkedln </label>
                                        <input type="text" class="form-control" id="link" name="link" 
                                               placeholder="Linkedln" required="true">

                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4" class="col-form-label">GitHub </label>
                                        <input type="text" class="form-control" id="git" name="git" 
                                               placeholder="GitHub" required="true">

                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4" class="col-form-label">Website </label>
                                        <input type="text" class="form-control" id="web" name="web" 
                                               placeholder="Website" required="true">

                                    </div>
                                    <div class="card-title" style="padding-top: 20px">
      <label for="inputPassword4" class="col-form-label">Passport size photo:</label></div>
      <div class="input-group">
     <input type="file" class="form-control" name="simages" title="Images" required="true">
     <span class="input-group-append">
                                </span>
                            
     </div>
                                      
                                <hr />
                                <button type="submit" class="btn btn-primary" name="submit">ADD</button>
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

             
  <?php if(isset($_POST['submit'])) {
  $email=$_POST['email'];
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
{$name= $row['FullName'];} }?>

  <?php
  $did=$_SESSION['resume_maker_uid'];
  $sql=mysqli_query($con,"select DATE_FORMAT(FROM_DAYS(DATEDIFF(now(),DOB)), '%Y')+0 AS Age from tblstudent where ID='$did'");
  $sql1=mysqli_fetch_array($sql);
  $age=$sql1['Age']; 
  

  $imgs=$_FILES["simages"]["name"];
    $extension = substr($imgs,strlen($imgs)-4,strlen($imgs));
    $allowed_extensions = array(".jpg","jpeg",".png",".gif");
    if(!in_array($extension,$allowed_extensions))
   {
      echo "<script>alert('Featured image has Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
   }
   else
   {
     $simages=md5($imgs).time().$extension;
     move_uploaded_file($_FILES["simages"]["tmp_name"],"images/".$simages);
     $query=mysqli_query($con,"insert into tblresume(FullName, Email, Age, PlaceOfBirth, PhoneNumber, Address, ZipCode, City, State, Country, DrivingLicense, Gender, Nationality, Religion, Linkedln, Website, GitHub, MStatus, Images) value('$name', '$email', '$age', '$pob', '$phone', '$addr', '$zip', '$city', '$state', '$country', '$dl', '$gender', '$nationality', '$religion', '$link', '$web', '$git', '$mstatus', '$simages')");
     if ($query) {
        echo "<script>alert('Personal Details has been added');</script>";
      echo "<script>window.location.href='add-personal.php'</script>";
  }
  else
    {
      echo "<script>alert('Something went wrong. Please try again');</script>";
      echo "<script>window.location.href='add-personal.php'</script>";
    }
  }
}?>
</body>
</html>
<?php }  ?>