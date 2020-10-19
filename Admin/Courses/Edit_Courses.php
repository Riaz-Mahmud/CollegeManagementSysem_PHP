<?php
session_start();

if (isset($_SESSION['username']) && isset($_SESSION['user_type'])) {

 ?>

<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin</title>
    <link rel="stylesheet" href="Edit_Courses.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

  </head>
  <body>
    <div class="sidebar">
      <header>Welcome</header>
      <a href="../index.php" >
        <i class=""></i>
        <span>Dashboard</span>
      </a>
      <a href="../Student/Add_Student.php" >
        <i class=""></i>
        <span>Student</span>
      </a>
      <a href="../Teacher/Add_Teacher.php">
        <i class=""></i>
        <span>Teacher</span>
      </a>
      <a href="../Courses/Edit_Courses.php" class="active">
         <i class=""></i>
        <span>Course</span>
      </a>
      <a href="../Section/Add_Section.php" >
        <i class=""></i>
        <span>Sections</span>
      </a>
      <a href="../Payment/Add_Payment.php" >
        <i class=""></i>
        <span>Payment</span>
      </a>
      <a href="../Academic/Active_Academic.php"   >
        <i class=""></i>
        <span>Academic</span>
      </a>
      <a href="../Grade/Grade.php" >
        <i class=""></i>
        <span>Grade</span>
      </a>
      <a href="../../include/logout.php" >
        <i class=""></i>
        <span>Logout</span>
      </a>

    </div>

    <div class="cms">
      <p style="margin-left:25%">College Management System</p>
    </div>


<div class="navbar" style="margin-left:auto; margin-top:0%;">
 <div class="topnav">
   <a href="Edit_Courses.php" class="active">EDIT CURRENT COURSES</a>
   <a href="Offer_Courses.php">OFFER NEW COURSE</a>
   <a href="Delete_Courses.php"   >DELETE COURSES</a>

</div>
</div>

<div class="main" style="margin-top:40px; margin-left:40%;">
  <table style="border:3px solid black;border-collapse:collapse;">
  <tr>
  <td  colspan="3" align=center> <h1> Current Course list </h1></td>
  </tr>
  <tr>
    <td style="border:1px solid green; padding: 10px;"><h3>Course Name</h3></td>
    <td style="border:1px solid green;padding: 10px;"><h3>College Year</h3> </td>
    <td style="border:1px solid green;padding: 10px;"><h3>Course Code</h3></td>
  </tr>
  <tr>
    <td style="border:1px solid green;padding: 10px;">physics 1st  paper</td>
    <td style="border:1px solid green;padding: 10px;">1st</td>
    <td style="border:1px solid green;padding: 10px;">003003</td>
    </tr>
    <tr>
      <td style="border:1px solid green;padding: 10px;">physics 1st  paper</td>
      <td style="border:1px solid green;padding: 10px;">1st</td>
      <td style="border:1px solid green;padding: 10px;">003003</td>
      </tr>
      <tr>
        <td style="border:1px solid green;padding: 10px;">physics 1st  paper</td>
        <td style="border:1px solid green;padding: 10px;">1st</td>
        <td style="border:1px solid green;padding: 10px;">003003</td>
        </tr>
  </table>
  </div>
  <div class="searchbox" style="margin-left:42%; margin-top:50px;">
    <input type="text" name="std_Search" value="" placeholder="Search..">
    <span> <input class="submit" type="submit" name="" value="Search"> </span>
  </div>

  <table style="margin-left:40%; margin-top:20px;">
    <tr>
      <td style="padding:10px;" >Course Name : </td>
      <td style="padding:10px;">  <input type="text" name="" value=""> </td>
  </tr>
  <tr>
    <td style="padding:10px;">College year:</td>
    <td style="padding:10px;">  <select name="gender_type"  style="width:175px;" required >
                <option value="" disabled  selected>     Select Year     </option>
                <option value="HYEF">First</option>
                <option value="YFEF">Second</option></td>
  </tr>
  <tr>
    <td style="padding:10px;">Course Code: </td>
    <td style="padding:10px;">  <input type="text" name="" value=""> </td>
  </tr>
  <tr>
    <td align=center colspan="2" style="padding:10px;" >
      <input class="submit" type="submit" name="submit_btn" value="Update">
    </td>
  </tr>
  </table>
</body>
</html>

<?php
}else {
  header("Location: ../../index.php");
  exit();
}
 ?>
