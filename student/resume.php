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
   
    <title>RESUME MAKER WEBSITE-Resume</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
img {
  border-radius: 50%;
}
.center {
  margin: 0;
  position: absolute;
  top: 695%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}
.left {
  margin: 0;
  position: absolute;
  top: 689%;
  left: 85%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}
    </style>
    
</head>

<body class="light">


                            <form  action="" name="personal_details" method="post" onsubmit="return checkpass();" enctype="multipart/form-data">
    
<div id="content">                              
<div id="form-container">
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

?><div id="form-container">
  <h1 id="title">Personal Details</h1>
                                <div class="form-row">
                                  
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/<?php echo $row['Images'];?>" width="200" height="150" value="<?php  echo $row['Images'];?>">
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4" class="col-form-label">Full Name</label>
                                        <p style="font-size:20px; color: black;"><?php  echo $row['FullName'];?></p>

                                        <div class="form-group">
                                        <label for="inputPassword4" class="col-form-label">Email </label>
                                        <p style="font-size:20px; color: black;"><?php  echo $row['Email'];?></p>

                                    </div>
                                    </div>
                                    
                                </div>
                                    
                                    <div class="form-row">
                                    
                                   <div class="form-group col-md-6">
                                        <label for="inputPassword4" class="col-form-label"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Age </label>
                                        <p style="font-size:20px; color: black;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php  echo $row['Age'];?></p>

                                    </div>


                             <div class="form-group col-md-6">
                                        <label for="inputPassword4" class="col-form-label">Place of Birth </label>
                                        <p style="font-size:20px; color: black;"><?php  echo $row['PlaceOfBirth'];?></p>

                                    </div> 
                             <div class="form-group col-md-6">
                                        <label for="inputPassword4" class="col-form-label">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Phone Number</label>
                                        <p style="font-size:20px; color: black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php  echo $row['PhoneNumber'];?></p>

                                    </div>
                                  <div class="form-group col-md-6">
              <label for="inputPassword4" class="col-form-label">Gender: </label><br>
              <p style="font-size:20px; color: black;"><?php  echo $row['Gender'];?></p>
            </div>


                                  <div class="form-group col-md-6">
                                        <label for="inputPassword4" class="col-form-label">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Address </label>
                                        <p style="font-size:20px; color: black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php  echo $row['Address'];?></p>

                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4" class="col-form-label">Zip Code </label>
                                        <p style="font-size:20px; color: black;"><?php  echo $row['ZipCode'];?></p>

                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4" class="col-form-label">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;City/Town </label>
                                        <p style="font-size:20px; color: black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php  echo $row['City'];?></p>

                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4" class="col-form-label">State </label>
                                        <p style="font-size:20px; color: black;"><?php  echo $row['State'];?></p>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4" class="col-form-label">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Country </label>
                                        <p style="font-size:20px; color: black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php  echo $row['Country'];?></p>
                                    </div>
                                   
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4" class="col-form-label">Marital Status </label>
                                       <p style="font-size:20px; color: black;"><?php  echo $row['MStatus'];?></p>

                                    </div>
                                     <div class="form-group col-md-6">
                                        <label for="inputPassword4" class="col-form-label">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Religion </label>
                                        <p style="font-size:20px; color: black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php  echo $row['Religion'];?></p>

                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4" class="col-form-label">Nationality </label>
                                        <p style="font-size:20px; color: black;"><?php  echo $row['Nationality'];?></p>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4" class="col-form-label">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Driving License </label>
                                        <p style="font-size:20px; color: black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php  echo $row['DrivingLicense'];?></p>

                                    </div>
                                    
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4" class="col-form-label">Linkedln </label>
                                        <p style="font-size:20px; color: black;"><?php  echo $row['Linkedln'];?></p>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4" class="col-form-label">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GitHub </label>
                                        <p style="font-size:20px; color: black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php  echo $row['GitHub'];?></p>

                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4" class="col-form-label">Website </label>
                                        <p style="font-size:20px; color: black;"><?php  echo $row['Website'];?></p>

                                    </div>
                                  </div>
                                </div>
                              <?php } ?>

<?php
if(isset($_SESSION["resume_maker_uid"])){
$ret=mysqli_query($con,"select FullName from tblstudent where ID='$_SESSION[resume_maker_uid]'");
while($row=mysqli_fetch_array($ret))
{$stu_name= $row['FullName'];}}?>


  <?php
$ret=mysqli_query($con,"select * from tblresume where FullName='$stu_name'");
$num=mysqli_num_rows($ret);
$cnt=1;
if($num>0){
while ($row=mysqli_fetch_array($ret)) {

?> 

<br><br><div id="form-container">
<h1 id="title">Education Details</h1>
<table class="table table-bordered table-hover data-tables">
  
<tr>
  <th>#</th>
   <th>Board / University</th>
   <th>University / Institution Name</th>
    <th>Year</th>
     <th>Percentage</th>
       <th>CGPA</th>

</tr>
<tr>
<th>10th(Secondary)</th>
<td><p style="color: black;"><?php  echo $row['SecondaryBoard'];?></td>
<td><p style="color: black;"><?php  echo $row['SecondaryBoardName'];?></p></td>
<td><p style="color: black;"><?php  echo $row['SecondaryBoardyop'];?></p></td>
<td><p style="color: black;"><?php  echo $row['SecondaryBoardper'];?></p></td>
<td><p style="color: black;"><?php  echo $row['SecondaryBoardcgpa'];?></p></td>
</tr>
<tr>
<th>12th(Senior Secondary)</th>
<td><p style="color: black;"><?php  echo $row['SSecondaryBoard'];?></td>
<td><p style="color: black;"><?php  echo $row['SSecondaryBoardName'];?></p></td>
<td><p style="color: black;"><?php  echo $row['SSecondaryBoardyop'];?></p></td>
<td><p style="color: black;"><?php  echo $row['SSecondaryBoardper'];?></p></td>
<td><p style="color: black;"><?php  echo $row['SSecondaryBoardcgpa'];?></p></td>
</tr>
<tr>
<th>Graduation</th>
<td><p style="color: black;"><?php  echo $row['GraUni'];?></td>
<td><p style="color: black;"><?php  echo $row['GraUniName'];?></p></td>
<td><p style="color: black;"><?php  echo $row['GraUniyop'];?></p></td>
<td><p style="color: black;"><?php  echo $row['GraUnidper'];?></p></td>
<td><p style="color: black;"><?php  echo $row['GraUnicgpa'];?></p></td>

</tr>
<tr>
<th>Post Graduation</th>
<td><p style="color: black;"><?php  echo $row['PGUni'];?></p></td>
<td><p style="color: black;"><?php  echo $row['PGUniName'];?></p></td>
<td><p style="color: black;"><?php  echo $row['PGUniyop'];?></p></td>
<td><p style="color: black;"><?php  echo $row['PGUniper'];?></p></td>
<td><p style="color: black;"><?php  echo $row['PGUnicgpa'];?></p></td>
</tr>

</table>
<table class="table table-bordered table-hover data-tables">
    <tr>
<th>Extra Curriculars</th>
<td><p style="color: black;"><?php  echo $row['ExtraCurriculars'];?></p></td>
</tr>
<tr>
<th>Other Achivement/Certificate/Qualification</th>
<td><p style="color: black;"><?php  echo $row['OtherAchivement'];?></p></td>
</tr>
</table>
</div>

       <?php } }?>

       <?php
if(isset($_SESSION["resume_maker_uid"])){
$ret=mysqli_query($con,"select FullName from tblstudent where ID='$_SESSION[resume_maker_uid]'");
while($row=mysqli_fetch_array($ret))
{$stu_name= $row['FullName'];}}?>


  <?php
$ret=mysqli_query($con,"select * from tblinternship where FullName='$stu_name'");
$num=mysqli_num_rows($ret);
$cnt=1;
if($num>0){
while ($row=mysqli_fetch_array($ret)) {

?> 
<br><br><div id="form-container">
  <h1 id="title">Work Experience or Internship Details</h1>
<table class="table table-bordered table-hover data-tables">
    <tr>
  <th width="200">Job Title</th>
  <td><p style="color: black;"><?php  echo $row['JobTitle'];?></p></td>
 </tr>
 <tr>
  <th width="200">Job Location</th>
  <td><p style="color: black;"><?php  echo $row['JobLocation'];?></p></td>
</tr>
<tr>
  <th>Company Name</th>
  <td><p style="color: black;"><?php  echo $row['CompanyName'];?></p></td>
  </tr>
   <tr>
  <th>Descriptions</th>
  <td colspan="3"><p style="color: black;"><?php  echo $row['Description'];?></p></td>
  </tr>
  <tr>
  <th>Start Date</th>
  <td><p style="color: black;"><?php  echo $row['StartDate'];?></p></td>
   </tr>
   <tr>
  <th>End Date</th>
  <td><p style="color: black;"><?php  echo $row['EndDate'];?></p></td>
  </tr>
  <tr>
  <th>Internship Apply Date</th>
  <td><p style="color: black;"><?php  echo $row['InternshipUpdationDate'];?></p></td>
</tr>
  </table>
<?php } ?>
</div>


<br><br><div id="form-container">
  <h1 id="title">Skills Details</h1>
<table class="table table-bordered table-hover data-tables">
                            <thead>
                             <tr>
                  <th><p style="font-size:16px; font-weight: bold;">S.NO</p></th>
                  <th><p style="font-size:16px; font-weight: bold;">Skills</p></th>
                  <th><p style="font-size:16px; font-weight: bold;">Level</p></th>
                  <th><p style="font-size:16px; font-weight: bold;">Skills Upload date</p></th>
                </tr>
<?php
if(isset($_SESSION["resume_maker_uid"])){
$ret=mysqli_query($con,"select FullName from tblstudent where ID='$_SESSION[resume_maker_uid]'");
while($row=mysqli_fetch_array($ret))
{$stu_name= $row['FullName'];}}?>

 <?php
$ret=mysqli_query($con,"select * from tblskills where FullName='$stu_name'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
  
                            </thead>
                            <tbody>

                           <tr>
                  <td><p style="font-size:16px; color: black;"><?php echo $cnt;?></p></td>
                  <td><p style="font-size:16px; color: black;"><?php  echo $row['Skills'];?></p></td>
                  <td><p style="font-size:16px; color: black;"><?php  echo $row['Level'];?></p></td>
                  <td><p style="font-size:16px; color: black;"><?php  echo $row['SkillsUploadDate'];?></p></td>
                </tr>
                <?php 
$cnt=$cnt+1;
}?>
</tbody>
</table>
</div>

<?php
if(isset($_SESSION["resume_maker_uid"])){
$ret=mysqli_query($con,"select FullName from tblstudent where ID='$_SESSION[resume_maker_uid]'");
while($row=mysqli_fetch_array($ret))
{$stu_name= $row['FullName'];}}?>

 <?php
$ret=mysqli_query($con,"select * from tblcourse where FullName='$stu_name'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
<br><br><div id="form-container">
  <h1 id="title">Course or Workshops Details</h1>
<table class="table table-bordered table-hover data-tables">
    <tr>
  <th width="200">Course/Workshops Title</th>
  <td><p style="color: black;"><?php  echo $row['Course'];?></p></td>
 </tr>
 <tr>
  <th width="200">Institution</th>
  <td><p style="color: black;"><?php  echo $row['Institution'];?></p></td>
</tr>
   <tr>
  <th>Descriptions</th>
  <td colspan="3"><p style="color: black;"><?php  echo $row['Description'];?></p></td>
  </tr>
  <tr>
  <th>Start Date</th>
  <td><p style="color: black;"><?php  echo $row['StartDate'];?></p></td>
   </tr>
   <tr>
  <th>End Date</th>
  <td><p style="color: black;"><?php  echo $row['EndDate'];?></p></td>
  </tr>
  <tr>
  <th>Course/Workshops Apply Date</th>
  <td><p style="color: black;"><?php  echo $row['CourseUpdationDate'];?></p></td>
</tr>
  </table>
<?php } ?>
</div>

<?php
if(isset($_SESSION["resume_maker_uid"])){
$ret=mysqli_query($con,"select FullName from tblstudent where ID='$_SESSION[resume_maker_uid]'");
while($row=mysqli_fetch_array($ret))
{$stu_name= $row['FullName'];}}?>

 <?php
$ret=mysqli_query($con,"select * from tblawards where FullName='$stu_name'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
<br><br><div id="form-container">
  <h1 id="title">Awards or Certification Details</h1>
<table class="table table-bordered table-hover data-tables">
    <tr>
  <th width="200">Title</th>
  <td><p style="color: black;"><?php  echo $row['AwardName'];?></p></td>
 </tr>
 <tr>
  <th width="200">Position</th>
  <td><p style="color: black;"><?php  echo $row['Position'];?></p></td>
</tr>
   <tr>
  <th>Descriptions</th>
  <td colspan="3"><p style="color: black;"><?php  echo $row['Description'];?></p></textarea></td>
  </tr>
  <tr>
  <th>Associated with</th>
  <td><p style="color: black;"><?php  echo $row['Associated_with'];?></p></td>
   </tr>
   <tr>
  <th>Date</th>
  <td><p style="color: black;"><?php  echo $row['Date'];?></p></td>
  </tr>
  <tr>
  <th>Awards or Certification Apply Date</th>
  <td><p style="color: black;"><?php  echo $row['AwardsUploadDate'];?></p></td>
</tr>
  </table>
  <?php } ?>
</div>



<br><br><div id="form-container">
  <h1 id="title">Projects Details</h1>
<table class="table table-bordered table-hover data-tables">
                            <thead>
                             <tr>
                  <th><p style="font-size:16px; font-weight: bold;">S.NO</p></th>
                  <th><p style="font-size:16px; font-weight: bold;">Project Titlev</th>
                  <th><p style="font-size:16px; font-weight: bold;">Description</p></th>
                    <th><p style="font-size:16px; font-weight: bold;">Project Upload Date</p></th>
                </tr>
<?php
if(isset($_SESSION["resume_maker_uid"])){
$ret=mysqli_query($con,"select FullName from tblstudent where ID='$_SESSION[resume_maker_uid]'");
while($row=mysqli_fetch_array($ret))
{$stu_name= $row['FullName'];}}?>

 <?php
$ret=mysqli_query($con,"select * from tblprojects where FullName='$stu_name'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
                            </thead>
                            <tbody>

                           <tr>
                  <td><p style="font-size:16px; color: black;"><?php echo $cnt;?></p></td>
                  <td><p style="font-size:16px; color: black;"><?php  echo $row['ProjectName'];?></p></td>
                  <td><p style="font-size:16px; color: black;"><?php  echo $row['Description'];?></p></td>
                  <td><p style="font-size:16px; color: black;"><?php  echo $row['ProjectUploadDate'];?></p></td>
                </tr>
                <?php 
$cnt=$cnt+1;
}?>
</tbody>
</table>
</div>




<br><br><div id="form-container">
  <h1 id="title">Languages Details</h1>
<table class="table table-bordered table-hover data-tables">
                            <thead>
                             <tr>
                  <th><p style="font-size:16px; font-weight: bold;">S.NO</p></th>
                  <th><p style="font-size:16px; font-weight: bold;">Languages</p></th>
                  <th><p style="font-size:16px; font-weight: bold;">Level</p></th>
                  <th><p style="font-size:16px; font-weight: bold;">Languages Upload date</p></th>
                </tr>
<?php
if(isset($_SESSION["resume_maker_uid"])){
$ret=mysqli_query($con,"select FullName from tblstudent where ID='$_SESSION[resume_maker_uid]'");
while($row=mysqli_fetch_array($ret))
{$stu_name= $row['FullName'];}}?>

 <?php
$ret=mysqli_query($con,"select * from tbl_languages where FullName='$stu_name'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
                            </thead>
                            <tbody>
<tr>
                  <td><p style="font-size:16px; color: black;"><?php echo $cnt;?></p></td>
                  <td><p style="font-size:16px; color: black;"><?php  echo $row['Languages'];?></p></td>
                  <td><p style="font-size:16px; color: black;"><?php  echo $row['Level'];?></p></td>
                  <td><p style="font-size:16px; color: black;"><?php  echo $row['LanguagesUploadDate'];?></p></td>
                </tr>
                <?php 
$cnt=$cnt+1;
}?>
</tbody>
</table>
</div>



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
<br><br><div id="form-container">
  <h1 id="title">Family Details</h1>
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
<td><p style="color: black;"><?php  echo $row['FatherName'];?></p></td>
<td><p style="color: black;"><?php  echo $row['FatherProfession'];?></p></td>
<td><p style="color: black;"><?php  echo $row['FatherEmail'];?></p></td>
<td><p style="color: black;"><?php  echo $row['FatherPhone'];?></p></td>
</tr>
<tr>
<th>Mother</th>
<td><p style="color: black;"><?php  echo $row['MotherName'];?></p></td>
<td><p style="color: black;"><?php  echo $row['MotherProfession'];?></p></td>
<td><p style="color: black;"><?php  echo $row['MotherEmail'];?></p></td>
<td><p style="color: black;"><?php  echo $row['MotherPhone'];?></p></td>
</tr>
<tr>
<th>Sibling</th>
<td><p style="color: black;"><?php  echo $row['SiblingName'];?></p></td>
<td><p style="color: black;"><?php  echo $row['SiblingProfession'];?></p></td>
<td><p style="color: black;"><?php  echo $row['SiblingEmail'];?></p></td>
<td><p style="color: black;"><?php  echo $row['SiblingPhone'];?></p></td>

</tr>
</table>
<?php } ?>
</div>




<?php
if(isset($_SESSION["resume_maker_uid"])){
$ret=mysqli_query($con,"select FullName from tblstudent where ID='$_SESSION[resume_maker_uid]'");
while($row=mysqli_fetch_array($ret))
{$stu_name= $row['FullName'];}}?>


  <?php
$ret=mysqli_query($con,"select * from tblresume where FullName='$stu_name'");
$num=mysqli_num_rows($ret);
while ($row=mysqli_fetch_array($ret)) {

?> 
 <br><br><div id="form-container">
  <h1 id="title">Resume Objective</h1>

 <div class="form-group col-md-6">
                                        
                                        <p style="font-size:20px; color: black; text-align: justify;"><?php  echo $row['Resume_Objective'];?></p>

  </div> 
<?php } ?>
</div>
</div>
</div>
<hr /><hr />
<div id="editor"></div>
                          
                          <div class="center">
                            <button class="btn btn-primary" onclick="printpage()">Download</button>
                          </div>
                          <div class="left">
                          <a href="dashboard.php"><p style="color: black; font-weight: bold; font-size: 18px;"><------ Back</p></a>
                          </div>
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
<script type="text/javascript">
 function printpage(){
 window.print();
}
</script>
</html>
<?php } } } ?>