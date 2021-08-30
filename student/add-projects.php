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
   
    <title>RESUME MAKER WEBSITE-Add Projects</title>
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
                        <img src="https://img.icons8.com/color/20/26e07f/project.png"/>
                        Add Projects Details
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
                            <p>Projects Details</p>
                        </div>
                        <div class="card-body b-b">
                            <form  action="" name="personal_details" method="post" onsubmit="return checkpass();" enctype="multipart/form-data">
    
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4" class="col-form-label">Project Title</label>
                                        <input type="text" class="form-control" id="title" name="title" required="true" placeholder="Project Title">
                                    </div>                              
                        

                        <div class="form-group col-md-12">
                                        <label for="inputPassword4" class="col-form-label">Project Description</label>
                                       <textarea name="pagedes" id="pagedes" rows="5" class="form-control"></textarea>
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

  $title=$_POST['title'];
  $des=$_POST['pagedes']; ?>

                    <?php
                        if(isset($_SESSION["resume_maker_uid"])){
                        $ret=mysqli_query($con,"select FullName from tblstudent where ID='$_SESSION[resume_maker_uid]'");
                        while($row=mysqli_fetch_array($ret))
                            {$name= $row['FullName'];} }
  

     $query=mysqli_query($con,"insert into tblprojects(FullName, ProjectName, Description) value('$name', '$title', '$des')");
     if ($query) {
        echo "<script>alert('Projects Details has been added. You can add more details if you want!!');</script>";
      echo "<script>window.location.href='add-projects.php'</script>";
  }
  else
    {
      echo "<script>alert('Something went wrong. Please try again');</script>";
    }
  }
?>
</body>
</html>
<?php }  ?>