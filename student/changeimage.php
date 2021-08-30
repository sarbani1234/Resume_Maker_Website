<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['resume_maker_uid']==0)) {
  header('location:logout.php');
  } else{
    if(isset($_POST['submit']))
  {
   $eid=$_GET['editid'];
    //Image
$pic=$_FILES["image"]["name"];
$extension = substr($pic,strlen($pic)-4,strlen($pic));

// allowed extensions
$allowed_extensions = array(".jpg","jpeg",".png",".gif");
// Validation for allowed extensions .in_array() function searches an array for a specific value.
if(!in_array($extension,$allowed_extensions))
{
echo "<script>alert('image has Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
}

else
{
//rename property images
$stupic=md5($pic).time().$extension;

     move_uploaded_file($_FILES["image"]["tmp_name"],"images/".$stupic);
   

    $query=mysqli_query($con,"update tblresume set Images='$stupic' where ID='$eid'");
  
    if ($query) {
    echo "<script>alert('Image Updated successfully');</script>";
  }
  else
    {
     echo "<script>alert('Something went wrong. Please try again!');</script>";
    }

  }
 }
  ?>
<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>RESUME MAKER WEBSITE-Upload Image</title>
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
                        <i class="icon-package"></i>
                        Upload Image
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
                            <form method="post" enctype="multipart/form-data">
                                
  <?php
$uid=$_SESSION['resume_maker_uid'];
$ret=mysqli_query($con,"select FullName from tblstudent where ID='$uid'");
while ($row=mysqli_fetch_array($ret)) {
$name=$row['FullName'];}
?>

<?php
$ret=mysqli_query($con,"select * from tblresume where FullName='$name'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {
    ?>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="inputEmail4" class="col-form-label">Full Name</label>
                                        <input type="text" class="form-control" id="fullname" name="fullname" value="<?php  echo $row['FullName'];?>" readon;y='true'>
                                    </div>
                                    
                                </div>
                               
                             
                  
                                <div class="form-group">
                                    <label for="inputAddress2" class="col-form-label">Photo</label>
                                    <img src="images/<?php echo $row['Images'];?>" width="200" height="150">
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress2" class="col-form-label">My Photo</label>
                                    <input type="file" class="form-control" name="image" required='true'>
                                </div>
                                
                               
                               <?php } ?>
                               
                                <button type="submit" name="submit" class="btn btn-primary">Update</button>
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