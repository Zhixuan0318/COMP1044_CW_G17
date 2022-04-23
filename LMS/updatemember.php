<?php
  include("connectDB.php");
  if (isset($_GET['update_member'])) {
    $member_id = $_GET['update_member'];
    $sql = "SELECT * FROM member WHERE member_id=".$member_id;
    $list = mysqli_query($conn,$sql);
    $result = $list->fetch_assoc();
  }

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
    $book_id = $_POST['book_id'];
    $member_id2 = $_POST['member_id2'];

    $sql = "UPDATE member SET
            firstname = '$first_name',
            lastname = '$last_name',
            gender = '$gender',
            address = '$address',
            contact = '$contact',
            type_id = '$type_id',
            year_level = '$year_level',
            status = '$status',
            user_id = '$user_id',
            book_id = '$book_id'
            WHERE member_id = $member_id2";
    $result = mysqli_query($conn,$sql);
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Update Member-Nottingham Library Management System</title>
    <link rel="icon" href="img/favicon.png">
    <!-- Bootstrap CSS and JS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Custom stylesheet -->
    <link rel="stylesheet" href="css/updatemember.css">
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@700&family=Poppins&display=swap" rel="stylesheet">
  </head>
  <body>
    <div class="container-fluid header">
      <div class="row">
        <div class="col-lg-6 col-md-12 vh-auto left">
          <h1 class="title">Keep calm and update something~</h1>
          <img class="cat" src="img/update.gif" alt="cat"><br>
          <div class="buttongrp">
            <a href="help.php"><button type="button" class="btn btn-outline-primary top">Need Help?</button></a><br>
            <a href="admin.php"><button type="button" class="btn btn-outline-primary bottom">Back to admin panel</button></a>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 vh-auto right">
          <h2 class="subtitle">1 | Select a member from the list</h2>

          <!-- table list -->
          <div class="tablebox">
          <table>
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th class="edit">Action</th>
              </tr>
            </thead>

            <tbody>
              <?php
                include"connectDB.php";
                $sql = " SELECT member_id, firstname, lastname FROM member";
                $list = mysqli_query($conn, $sql);

                $x = 1; while ($row = mysqli_fetch_array($list)) { ?>
                  <tr>
				            <td class="form-memberid"> <?php echo $row['member_id'] ?> </td>
                    <div class="member-name-width">
                      <td class="member-name"> <?php echo $row['firstname']." ".$row['lastname'] ?> </td>
                    </div>
				            <td class="edit">
                      <a href="updatemember.php?update_member=<?php echo $row['member_id'] ?>#sec"><img class="edit-icon" src="https://img.icons8.com/ios-glyphs/30/000000/edit--v1.png"/></a>
				            </td>
			            </tr>
               <?php $x++; } ?>
            </tbody>
          </table>
        </div>
        </div>
      </div>
    </div>
    <div class="container-fluid footer vh-auto" id="sec">
      <h2 class="sec2-title">2 | Update details of selected member</h2>
      <div class="formcontainer">
        <!-- form -->
        <form class="form" action="updatemember.php" method="post">
          <!-- id -->
          <div class="form-outline mb-3">
            <label class="form-label">Member ID</label>
            <input type="text" name="member_id2" class="form-control" placeholder="Type <?php if (isset($_GET['update_member'])){echo $result['member_id'];}?> to confirm update of this member [IMPORTANT]"/>
          </div>
            <!-- first name -->
            <div class="form-outline mb-3">
              <label class="form-label">First Name</label>
              <input type="text" name="first_name" class="form-control" placeholder="Example: Mark"/>
              <p class="query"><?php if (isset($_GET['update_member'])){echo "Previous record: ".$result['firstname'];}?></p>
            </div>
            <!-- last name -->
            <div class="form-outline mb-3">
              <label class="form-label">Last Name</label>
              <input type="text" name="last_name" class="form-control" placeholder="Example: Sanchez"/>
              <p class="query"><?php if (isset($_GET['update_member'])){echo "Previous record: ".$result['lastname'];}?></p>
            </div>
            <!-- gender -->
            <div class="form-outline mb-3">
              <label class="form-label">Gender</label>
              <select class="form-control" name="gender">
                <option value="" disabled selected>Choose a gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
              </select>
              <p class="query"><?php if (isset($_GET['update_member'])){echo "Previous record: ".$result['gender'];}?></p>
            </div>
            <!-- address -->
            <div class="form-outline mb-3">
              <label class="form-label">Address</label>
              <input class="form-control" type="text" name="address" placeholder="Example: Talisay">
              <p class="query"><?php if (isset($_GET['update_member'])){echo "Previous record: ".$result['address'];}?></p>
            </div>
            <!-- contact -->
            <div class="form-outline mb-3">
              <label class="form-label">Contact</label>
              <input type="text" name="contact" class="form-control" placeholder="Example: 984563421"/>
              <p class="query"><?php if (isset($_GET['update_member'])){echo "Previous record: ".$result['contact'];}?></p>
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
              <p class="query"><?php if (isset($_GET['update_member'])){echo "Previous record: ".$result['type_id'];}?></p>
            </div>
            <!-- year level -->
            <div class="form-outline mb-3">
              <label class="form-label">Year Level</label>
              <input type="text" name="year_level" class="form-control" placeholder="Example: Second Year"/>
              <p class="query"><?php if (isset($_GET['update_member'])){echo "Previous record: ".$result['year_level'];}?></p>
            </div>
            <!-- status -->
            <div class="form-outline mb-3">
              <label class="form-label">Status</label>
              <select class="form-control" name="status">
                <option value="" disabled selected>Choose a status</option>
                <option value="Active">Active</option>
                <option value="Banned">Banned</option>
              </select>
              <p class="query"><?php if (isset($_GET['update_member'])){echo "Previous record: ".$result['status'];}?></p>
            </div>
            <!-- user id -->
            <div class="form-outline mb-3">
              <label class="form-label">User ID</label>
              <input type="text" name="user_id" class="form-control" placeholder="Example: 1"/>
              <p class="query"><?php if (isset($_GET['update_member'])){echo "Previous record: ".$result['user_id'];}?></p>
            </div>
            <!-- book id -->
            <div class="form-outline mb-3">
              <label class="form-label">Book ID</label>
              <input type="text" name="book_id" class="form-control" placeholder="Example: 1"/>
              <p class="query"><?php if (isset($_GET['update_member'])){echo "Previous record: ".$result['book_id'];}?></p>
            </div>
            <div class="submit">
              <button name="submit" type="submit" class="btn btn-primary add">Update</button>
            </div>
        </form>
      </div>

    </div>
  </body>
</html>
