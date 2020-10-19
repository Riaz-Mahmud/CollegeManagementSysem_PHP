<?php
session_start();

if (isset($_SESSION['username']) && isset($_SESSION['user_type'])) {

 ?>

<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin</title>
    <link rel="stylesheet" href="Delete_Courses.css">

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
      <a href="../Teacher/Add_Teacher.php" >
        <i class=""></i>
        <span>Teacher</span>
      </a>
      <a href="../Courses/Edit_Courses.php"class="active">
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


<div class="navbar" style="margin-left:12%; margin-top:0%;">
 <div class="topnav">
   <a href="Edit_Courses.php">EDIT CURRENT COURSES</a>
   <a href="Offer_Courses.php">OFFER NEW COURSE</a>

   <a href="Delete_Courses.php"  class="active" >DELETE COURSES</a>

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
  <div class="main" style="margin-top:40px; margin-left:40%;">
    <table style="border:3px solid black;border-collapse:collapse;">
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
    </table>
    </div>

    <div class="delete" style="margin-left:50%; margin-top:50px;">
    <input class="submit" type="submit" name="" value="Delete? " onclick="document.getElementById('dlt').style.display='block'">
    </div>



    <div id="dlt" class="modal">
      <span onclick="document.getElementById('dlt').style.display='none'" class="close" title="Close Modal">&times;</span>
      <form class="modal-content" action="/action_page.php">
        <div class="container">
          <h1>Delete Course?</h1>


          <div class="clearfix">
            <button type="button" class="cancelbtn">Cancel</button>
            <button type="button" class="deletebtn">Delete</button>
          </div>
        </div>
      </form>
    </div>

</body>
</html>

<?php
}else {
  header("Location: ../../index.php");
  exit();
}
 ?>
