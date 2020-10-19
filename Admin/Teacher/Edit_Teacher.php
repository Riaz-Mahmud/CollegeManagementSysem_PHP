<?php
session_start();
if (isset($_SESSION['username']) && isset($_SESSION['user_type'])) {
require "../../include/conn.php";
 ?>

<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin</title>
    <link rel="stylesheet" href="Edit_Teacher.css">

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
      <a href="../Teacher/Add_Teacher.php" class="active">
        <i class=""></i>
        <span>Teacher</span>
      </a>
      <a href="../Courses/Edit_Courses.php">
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
   <a href="Add_Teacher.php" >ADD NEW TEACHER</a>
   <a href="Edit_Teacher.php" class="active" >EDIT CURRENT TEACHER</a>
   <a href="Delete_Teacher.php">DELETE TEACHER</a>

</div>
    </div>

<div class="main" style="margin-top:40px; margin-left:25%;">
  <table style="border:3px solid black;border-collapse:collapse;">
  <tr>
  <td  colspan="9" align=center> <h1> Current Teacher list </h1></td>
  </tr>

  <tr>
    <td style="border:1px solid green; padding: 10px;"><h3>ID:</h3></td>
    <td style="border:1px solid green; padding: 10px;"><h3>Full name:</h3></td>
    <td style="border:1px solid green;padding: 10px;"><h3>Birthdate</h3> </td>
    <td style="border:1px solid green;padding: 10px;"><h3>Contact No. </h3></td>
    <td style="border:1px solid green;padding: 10px;"> <h3>Email</h3></td>
    <td style="border:1px solid green;padding: 10px;"> <h3>Gender</h3></td>
    <td style="border:1px solid green;padding: 10px;"> <h3>Address</h3></td>
    <td style="border:1px solid green;padding: 10px;"> <h3>Department</h3></td>
    <td style="border:1px solid green;padding: 10px;"><h3>Username </h3> </td>

  </tr>

  <?php
    $sql = "select * from teacher ORDER BY id DESC Limit 5;";
    $query = mysqli_query($conn,$sql);
    $nums = mysqli_num_rows($query);

    while ($res = mysqli_fetch_array($query)) {
      ?>
        <tr>
          <td style="border:1px solid green; padding: 10px;"><?php echo $res['id'] ; ?></td>
          <td style="border:1px solid green;padding: 10px;"><?php echo $res['name'] ; ?></td>
          <td style="border:1px solid green;padding: 10px;"><?php echo $res['dob'] ; ?></h3></td>
          <td style="border:1px solid green;padding: 10px;"><?php echo $res['contact'] ; ?></td>
          <td style="border:1px solid green;padding: 10px;"><?php echo $res['email'] ; ?></td>
          <td style="border:1px solid green;padding: 10px;"><?php echo $res['gender'] ; ?></td>
          <td style="border:1px solid green;padding: 10px;"><?php echo $res['address'] ; ?></td>
          <td style="border:1px solid green;padding: 10px;"><?php echo $res['dept'] ; ?></td>
          <td style="border:1px solid green;padding: 10px;"><?php echo $res['username'] ; ?></td>

        </tr>
      <?php
      }
     ?>

  </table>
</div>

<div class="searchbox" style="margin-left:42%; margin-top:50px;">
  <input type="text" name="std_Search" value="" placeholder="Search..">
  <span> <input class="submit" type="submit" name="" value="Search"> </span>
</div>

<div class="edit_data">
  <table style="margin-left:40%; margin-top:20px;">
    <tr>
      <td style="padding:10px;" >Full name: </td>
      <td style="padding:10px;">  <input type="text" name="" value=""> </td>
  </tr>
  <tr>
    <td style="padding:10px;">Birthdate: </td>
    <td style="padding:10px; width:175px;">  <input type="date" name="" value=""> </td>
  </tr>
  <tr>
    <td style="padding:10px;">Contact No. : </td>
    <td style="padding:10px;">  <input type="text" name="" value=""> </td>
  </tr>
  <tr>
    <td style="padding:10px;">Email Addess : </td>
    <td style="padding:10px;">  <input type="text" name="" value=""> </td>
  </tr>
  <tr>
    <td style="padding:10px;">Gender: </td>
    <td style="padding:10px;">
      <select name="gender_type"  style="width:175px;" required >
                  <option value="" disabled  selected>     Select Gender     </option>
                  <option value="HYEF">Male</option>
                  <option value="YFEF">Female</option>
                 </td>
  </tr>
  <tr>
    <td style="padding:10px;">Address: </td>
    <td style="padding:10px;">  <input type="text" name="" value=""> </td>
  </tr>
  <tr>
    <td style="padding:10px;">Department:</td>
    <td style="padding:10px;">  <select name="gender_type"  style="width:175px;" required >
                <option value="" disabled  selected>     Select Dept.     </option>
                <option value="Science">Science</option>
                <option value="Commerce">Commerce</option></td>
  </tr>
  <tr>
    <td style="padding:10px;">Username: </td>
    <td style="padding:10px;"> <input type="text" name="" value=""> </td>
  </tr>
  <tr>
    <td style="padding:10px;">Password: </td>
    <td style="padding:10px;">  <input type="Password" name="" value=""> </td>
  </tr>
  <tr>
    <td align=center colspan="2" style="padding:10px;" >
      <input class="submit" type="submit" name="submit_btn" value="Update">
    </td>
  </tr>
  </table>
</div>



</body>
</html>

<?php
}else {
  header("Location: ../../index.php");
  exit();
}
 ?>
