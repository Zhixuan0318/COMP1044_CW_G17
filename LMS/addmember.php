<?php
  include('connectDB.php');
  date_default_timezone_set('Asia/Kuala_Lumpur');
  if(isset($_POST['submit'])){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $contact = $_POST['contact'];
    $type_id = $_POST['type_id'];
    $year_level = $_POST['year_level'];
    $status = $_POST['status'];
    $user_id = $_POST['user_id'];

    $sql = "INSERT INTO member (member_id, firstname, lastname, gender, address, contact, type_id, year_level, status, user_id, book_id) VALUES (NULL, '$first_name', '$last_name', '$gender', '$address', '$contact', '$type_id', '$year_level', '$status', '$user_id', NULL)";
    $result = mysqli_query($conn,$sql);
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Add Member-Nottingham Library Managment System</title>
    <link rel="icon" href="img/favicon.png">
    <!-- Bootstrap CSS and JS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Custom stylesheet -->
    <link rel="stylesheet" href="css/addmember.css">
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@700&family=Poppins&display=swap" rel="stylesheet">
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">

        <div class="col-lg-6 col-md-12 vh-100 left">
          <h1 class="title">I'm still waiting for an update~</h1>
          <img class="coffee" src="img/coffeeguy.png" alt="coffee"><br>
          <div class="buttongrp">
            <a href="help.php"><button type="button" class="btn btn-outline-primary top">Need Help?</button></a><br>
            <a href="admin.php"><button type="button" class="btn btn-outline-primary bottom">Back to admin panel</button></a>
          </div>
        </div>

        <div class="col-lg-6 col-md-12 vh-auto right">
          <div class="formcontainer">
            <!-- form -->
            <form class="form" action="addmember.php" method="post">
                <h2 class="formtitle">Add a new member</h2>
                <!-- first name -->
                <div class="form-outline mb-3">
                  <label class="form-label">First Name</label>
                  <input type="text" name="first_name" class="form-control" placeholder="Example: Mark"/>
                </div>
                <!-- last name -->
                <div class="form-outline mb-3">
                  <label class="form-label">Last Name</label>
                  <input type="text" name="last_name" class="form-control" placeholder="Example: Sanchez"/>
                </div>
                <!-- gender -->
                <div class="form-outline mb-3">
                  <label class="form-label">Gender</label>
                  <select class="form-control" name="gender">
                    <option value="" disabled selected>Choose a gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                  </select>
                </div>
                <!-- address -->
                <div class="form-outline mb-3">
                  <label class="form-label">Address</label>
                  <input class="form-control" type="text" name="address" placeholder="Example: Talisay">
                </div>
                <!-- contact -->
                <div class="form-outline mb-3">
                  <label class="form-label">Contact</label>
                  <input type="text" name="contact" class="form-control" placeholder="Example: 984563421"/>
                </div>
                <!-- type ID -->
                <div class="form-outline mb-3">
                  <label class="form-label">Type ID</label>
                  <select class="form-control" name="type_id">
                    <option value="" disabled selected>Choose a type ID</option>
                    <option value="1">1 | Teacher</option>
                    <option value="2">2 | Employee</option>
                    <option value="3">3 | Non-teaching</option>
                    <option value="4">4 | Student</option>
                    <option value="5">5 | Construction</option>
                  </select>
                </div>
                <!-- year level -->
                <div class="form-outline mb-3">
                  <label class="form-label">Year Level</label>
                  <input type="text" name="year_level" class="form-control" placeholder="Example: Second Year"/>
                </div>
                <!-- status -->
                <div class="form-outline mb-3">
                  <label class="form-label">Status</label>
                  <select class="form-control" name="status">
                    <option value="" disabled selected>Choose a status</option>
                    <option value="Active">Active</option>
                    <option value="Banned">Banned</option>
                  </select>
                </div>
                <!-- user id-->
                <div class="form-outline mb-3">
                  <label class="form-label">Your User ID</label>
                  <input type="text" name="user_id" class="form-control" placeholder="Fill in your librarian User ID"/>
                </div>
                <div class="submit">
                  <button name="submit" type="submit" class="btn btn-primary add">Submit</button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
