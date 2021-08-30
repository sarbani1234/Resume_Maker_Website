<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');


  ?>
<aside class="main-sidebar fixed offcanvas shadow">
    <section class="sidebar">
        <div class="w-80px mt-3 mb-3 ml-3">
 <h2 align="center">RESUME MAKER</h2>
        </div>
        <div class="relative">
            <a data-toggle="collapse" href="#userSettingsCollapse" role="button" aria-expanded="false"
               aria-controls="userSettingsCollapse" class="btn-fab btn-fab-sm fab-right fab-top btn-primary shadow1 ">
                <i class="icon icon-cogs"></i>
            </a>
            <div class="user-panel p-3 light mb-2">
                <div>
                    <div class="float-left image">
                        <img class="user_avatar" src="assets/img/dummy/image.png" alt="User Image">
                    </div>
                    <div class="float-left info">
                        <?php
$aid=$_SESSION['resume_maker_uid'];
$ret=mysqli_query($con,"select FullName from tblstudent where ID='$aid'");
$row=mysqli_fetch_array($ret);
$name=$row['FullName'];

?>
                        <h6 class="font-weight-light mt-2 mb-1"><?php echo $name; ?></h6>
                        <a href="#"><i class="icon-circle text-primary blink"></i> Online</a>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="collapse multi-collapse" id="userSettingsCollapse">
                    <div class="list-group mt-3 shadow">
                        <a href="change-password.php" class="list-group-item list-group-item-action"><i
                                class="mr-2 icon-cogs text-yellow"></i>Settings</a>
                                
                        <a href="logout.php" class="list-group-item list-group-item-action"><i
                                class="mr-2 icon-security text-purple"></i>Logout</a>
                    </div>
                </div>
            </div>
        </div>
        <ul class="sidebar-menu">
           
            <li class="treeview"><a href="dashboard.php">
                <i class="icon icon-sailing-boat-water purple-text s-18"></i> <span>Dashboard</span> 
            </a>
                
            </li>
            <li class="treeview"><a href="#">
                <i class="icon icon-account_box light-green-text s-18"></i>
                <span>Personal Details</span>
                
            </a>
                <ul class="treeview-menu">
                    <li><a href="add-personal.php"><i class="icon icon-circle-o"></i>Add Details</a>
                    </li>
                    <li><a href="manage-personal.php"><i class="icon icon-add"></i>Manage Details</a>
                    </li>
                </ul>
            </li>
            <li class="treeview"><a href="#">
                <i class="icon icon icon-package blue-text s-18"></i>
                <span>Fill Education Form</span>
                
            </a>
                <ul class="treeview-menu">
                    <li><a href="add-education.php"><i class="icon icon-circle-o"></i>Add Detail</a>
                    </li>
                    <li><a href="manage-education.php"><i class="icon icon-add"></i>Manage Detail </a>
                    </li>
                </ul>
            </li>
             <li class="treeview"><a href="#">
                &nbsp;&nbsp;&nbsp;&nbsp;<img src="https://img.icons8.com/officexs/16/000000/audio-book.png"/>&nbsp;&nbsp;&nbsp;&nbsp;
                <span>Work Experience or Internships</span>
                
            </a>
                <ul class="treeview-menu">
                    <li><a href="add-experience.php"><i class="icon icon-circle-o"></i>Add Detail</a>
                    </li>
                    <li><a href="manage-experience.php"><i class="icon icon-add"></i>Manage Detail </a>
                    </li>
                </ul>
            </li>
            <li class="treeview"><a href="add-resume_objective.php"><i class="icon icon-documents3 text-blue s-18"></i>Resume Objective</a>
            </li>
            <li class="treeview"><a href="add-skills.php">
                &nbsp;&nbsp;&nbsp;&nbsp;<img src="https://img.icons8.com/officexs/16/000000/price-tag.png"/>&nbsp;&nbsp;&nbsp;&nbsp;
                <span>Skills</span>
                
            </a>
            <ul class="treeview-menu">
                    <li><a href="add-skills.php"><i class="icon icon-circle-o"></i>Add Detail</a>
                    </li>
                    <li><a href="manage-skills.php"><i class="icon icon-add"></i>View Detail </a>
                    </li>
                </ul>
                
            </li>
            <li class="treeview"><a href="histroy-applied-job.php">
                &nbsp;&nbsp;&nbsp;&nbsp;<img src="https://img.icons8.com/officexs/16/000000/translation.png"/>&nbsp;&nbsp;&nbsp;&nbsp;
                <span>Languages</span>
                
            </a>
                <ul class="treeview-menu">
                    <li><a href="add-language.php"><i class="icon icon-circle-o"></i>Add Detail</a>
                    </li>
                    <li><a href="manage-language.php"><i class="icon icon-add"></i>View Detail </a>
                    </li>
                </ul>
            </li>
            <li class="treeview"><a href="histroy-applied-job.php">
                &nbsp;&nbsp;&nbsp;&nbsp;<img src="https://img.icons8.com/office/16/000000/under-computer.png"/>&nbsp;&nbsp;&nbsp;&nbsp;
                <span>Wokshops or Course</span>
                
            </a>
                <ul class="treeview-menu">
                    <li><a href="add-workshops.php"><i class="icon icon-circle-o"></i>Add Detail</a>
                    </li>
                    <li><a href="manage-workshops.php"><i class="icon icon-add"></i>Manage Detail </a>
                    </li>
                </ul>
            </li>
              <li class="treeview"><a href="histroy-applied-job.php">
                &nbsp;&nbsp;&nbsp;<img src="https://img.icons8.com/material-two-tone/20/4a90e2/prize.png"/>&nbsp;&nbsp;&nbsp;
                <span>Awards and Certifications</span>   
            </a>     
            <ul class="treeview-menu">
                    <li><a href="add-awards.php"><i class="icon icon-circle-o"></i>Add Detail</a>
                    </li>
                    <li><a href="manage-awards.php"><i class="icon icon-add"></i>Manage Detail </a>
                    </li>
                </ul>           
            </li>

            <li class="treeview"><a href="histroy-applied-job.php">
                &nbsp;&nbsp;&nbsp;<img src="https://img.icons8.com/color/20/26e07f/project.png"/>&nbsp;&nbsp;&nbsp;
                <span>Projects</span>   
            </a>     
            <ul class="treeview-menu">
                    <li><a href="add-projects.php"><i class="icon icon-circle-o"></i>Add Detail</a>
                    </li>
                    <li><a href="manage-projects.php"><i class="icon icon-add"></i>View Detail </a>
                    </li>
                </ul>           
            </li>
              <li class="treeview"><a href="#">
                &nbsp;&nbsp;&nbsp;<img src="https://img.icons8.com/emoji/20/000000/family--man-woman-girl-girl.png"/>&nbsp;&nbsp;&nbsp;
                <span>Family Details</span>
                
            </a>
                <ul class="treeview-menu">
                    <li><a href="add-family.php"><i class="icon icon-circle-o"></i>Add Details</a>
                    </li>
                    <li><a href="manage-family.php"><i class="icon icon-add"></i>Manage Details</a>
                    </li>
                </ul>
            </li>

              <li class="treeview"><a href="resume.php">
                &nbsp;&nbsp;&nbsp;<img src="https://img.icons8.com/material-two-tone/20/26e07f/create-new--v2.png"/>&nbsp;&nbsp;&nbsp;
                <span>View Resume</span>   
            </a>                
            </li>

           
            
      
 
        </ul>
    </section>
</aside>