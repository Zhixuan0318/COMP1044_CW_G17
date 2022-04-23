<?php
  include("connectDB.php");
  if (isset($_GET['delete_member'])) {
	$member_id = $_GET['delete_member'];
  $sql = "DELETE FROM member WHERE member_id=".$member_id;

	mysqli_query($conn,$sql);
	header('location: deletemember.php');
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Delete Member-Nottingham Library Management System</title>
    <link rel="icon" href="img/favicon.png">
    <!-- Bootstrap CSS and JS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Custom stylesheet -->
    <link rel="stylesheet" href="css/deletemember.css">
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@700&family=Poppins&display=swap" rel="stylesheet">
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 col-md-12 vh-auto left">
          <h1 class="title">Wait...you're deleting something?</h1>
          <img class="coffee" src="img/trash.png" alt="search"><br>
          <div class="buttongrp">
            <a href="help.php"><button type="button" class="btn btn-outline-primary top">Need Help?</button></a><br>
            <a href="admin.php"><button type="button" class="btn btn-outline-primary bottom">Back to admin panel</button></a>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 vh-auto right">
          <h2 class="subtitle">Delete a member from the list</h2>

          <!-- table list -->
          <div class="tablebox">
          <table>
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th class="delete">Action</th>
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
				            <td class="delete">
					            <a href="deletemember.php?delete_member=<?php echo $row['member_id'] ?>" onclick="return confirm('The deletion is permanent. Are You Sure?')"><img class="close-icon" src="https://img.icons8.com/external-doodle-bomsymbols-/91/000000/external-close-doodle-web-design-device-set-2-doodle-bomsymbols-.png"/></a>
				            </td>
			            </tr>
               <?php $x++; } ?>
            </tbody>
          </table>
        </div>
        </div>
      </div>
    </div>
  </body>
</html>
