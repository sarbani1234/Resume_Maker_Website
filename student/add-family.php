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
   
    <title>RESUME MAKER WEBSITE-Add Family</title>
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
        #form-container {
  background-color: rgb(250, 250, 250);
  margin: 0 auto;
  border-radius: 4px;
  width: 75%;
  max-width: 900px;
  padding: 10px;
  padding-top: 20px;
 box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
#title {
  text-transform: uppercase;
  text-align: center;
  font-size: 30px;
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
                        Add Family Details
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
                            <p>Family Details</p>
                        </div>
                        <div class="card-body b-b">
                            <form  action="" name="family_details" method="post" onsubmit="return checkpass();" enctype="multipart/form-data">
                              

                
                    <h1 id="title">Father's Details</h1>
                                    <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4" class="col-form-label">Father's Name </label>
                                        <input type="text" class="form-control" id="fname" name="fname" 
                                               placeholder="Father's Name" required="true">

                                    </div>

                                    
                             <div class="form-group col-md-6">
                                        <label for="inputPassword4" class="col-form-label">Father's Phone Number</label>
                                        <input type="text" class="form-control" id="fphone" name="fphone" 
                                               placeholder="Father's Phone Number" required="true">

                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4" class="col-form-label">Father's Profession</label>
                                        <input type="text" class="form-control" id="fprof" name="fprof" 
                                               placeholder="Father's Profession" required="true">

                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4" class="col-form-label">Father's Email</label>
                                        <input type="email" class="form-control" id="femail" name="femail" 
                                               placeholder="Father's Email" required="true">

                                    </div>
                                </div>
                           



                            <br><br>
                    <h1 id="title">Mother's Details</h1>
                                    <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4" class="col-form-label">Mother's Name </label>
                                        <input type="text" class="form-control" id="mname" name="mname" 
                                               placeholder="Mother's Name" required="true">

                                    </div>

                                    
                             <div class="form-group col-md-6">
                                        <label for="inputPassword4" class="col-form-label">Mother's Phone Number</label>
                                        <input type="text" class="form-control" id="mphone" name="mphone" 
                                               placeholder="Mother's Phone Number" required="true">

                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4" class="col-form-label">Mother's Profession</label>
                                        <input type="text" class="form-control" id="mprof" name="mprof" 
                                               placeholder="Mother's Profession" required="true">

                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4" class="col-form-label">Mother's Email</label>
                                        <input type="email" class="form-control" id="memail" name="memail" 
                                               placeholder="Mother's Email" required="true">

                                    </div>
                                </div>
                           


                             <br><br>
                    <h1 id="title">Sibling's Details</h1>
                                    <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4" class="col-form-label">Sibling's Name </label>
                                        <input type="text" class="form-control" id="sname" name="sname" 
                                               placeholder="Sibling's Name" required="true">

                                    </div>

                                    
                             <div class="form-group col-md-6">
                                        <label for="inputPassword4" class="col-form-label">Sibling's Phone Number</label>
                                        <input type="text" class="form-control" id="sphone" name="sphone" 
                                               placeholder="Sibling's Phone Number" required="true">

                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4" class="col-form-label">Sibling's Profession</label>
                                        <input type="text" class="form-control" id="sprof" name="sprof" 
                                               placeholder="Sibling's Profession" required="true">

                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4" class="col-form-label">Sibling's Email</label>
                                        <input type="email" class="form-control" id="semail" name="semail" 
                                               placeholder="Sibling's Email" required="true">

                                    </div>
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
  $sphone=$_POST['sphone'];


if(isset($_SESSION["resume_maker_uid"])){
$ret=mysqli_query($con,"select FullName from tblstudent where ID='$_SESSION[resume_maker_uid]'");
while($row=mysqli_fetch_array($ret))
{$name= $row['FullName'];} }?>

  <?php
     $query=mysqli_query($con,"insert into tblfamily(FullName, FatherName, FatherProfession, FatherPhone, FatherEmail, MotherName, MotherProfession, MotherPhone, MotherEmail, SiblingName, SiblingProfession, SiblingPhone, SiblingEmail) value('$name', '$fname', '$fprof', '$fphone', '$femail', '$mname', '$mprof', '$mphone', '$memail', '$sname', '$sprof', '$sphone', '$semail')");
     if ($query) {
        echo "<script>alert('Family Details has been added');</script>";
      echo "<script>window.location.href='add-family.php'</script>";
  }
  else
    {
      echo "<script>alert('Something went wrong. Please try again');</script>";
    }
  }
?>
</body>
</html>
<?php } ?>