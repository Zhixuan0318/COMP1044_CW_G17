<?php
include("connectDB.php");
$sql = "SELECT\n"
. "  (SELECT COUNT(*) FROM member ) as table1Count, \n"
. "  (SELECT COUNT(*) FROM book ) as table2Count,\n"
. "  (SELECT COUNT(*) FROM borrow) as table3Count,\n"
. "(SELECT last_update FROM mysql.innodb_index_stats ORDER BY last_update DESC LIMIT 1) as table4count;"; // Fetch all counts
$result=mysqli_query($conn ,$sql);
$count = mysqli_fetch_array($result);
$membercount = $count[0];
$bookcount = $count[1];
$borrowcount = $count[2];
$updatetimer = $count[3];
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dashboard-Nottingham Library Management System</title>
    <link rel="icon" href="img/favicon.png">
    <!-- Bootstrap CSS and JS CDN -->
    <script src="js/main.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Custom stylesheet -->
    <link rel="stylesheet" href="css/admin.css">
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@700&family=Poppins&display=swap" rel="stylesheet">
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 col-md-12 vh-auto left">
          <h1 class="title">You're in!</h1><br>
          <h1 class="subtitle">Let's do something fun in here...</h1>
          <div class="insightbox">
            <h2 class="insight_title">Database Insight</h2><hr>
            <p class="insightpills">Current Members |   <?php echo htmlspecialchars($membercount); ?></p>
            <p class="insightpills">Current Books |   <?php echo htmlspecialchars($bookcount); ?></p>
            <p class="insightpills">Current Borrower |   <?php echo htmlspecialchars($borrowcount); ?></p><hr>
            <p class="insightpills">Last updated:   <?php echo htmlspecialchars($updatetimer); ?></p>
          </div>
          <div class="buttongrp">
            <a href="help.php" type="button" class="btn btn-outline-primary top a">Need Help?</a><br>
            <a href="home.php" type="button" class="btn btn-outline-primary bottom a">Log Out</a>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 vh-auto right">
          <div class="row btnrow">
            <div class="col-lg-6">
              <a href="addbook.php" type="button" class="btn btn-outline-primary button">Add a book</a>
            </div>
            <div class="col-lg-6">
              <a href="addmember.php" type="button" class="btn btn-outline-primary button">Add a member</a>
            </div>
          </div>
          <div class="row btnrow">
            <div class="col-lg-6">
              <a href="searchbook.php" type="button" class="btn btn-outline-primary button">Search for a book</a>
            </div>
            <div class="col-lg-6">
              <a href="searchmember.php" type="button" class="btn btn-outline-primary button">Search for a member</a>
            </div>
          </div>
          <div class="row btnrow">
            <div class="col-lg-6">
              <a href="updateborrow.php" type="button" class="btn btn-outline-primary button">Update borrow details</a>
            </div>
            <div class="col-lg-6">
              <a href="updatemember.php" type="button" class="btn btn-outline-primary button">Update member details</a>
            </div>
          </div>
          <div class="row btnrow">
            <div class="col-lg-6">
              <a href="deletebook.php" type="button" class="btn btn-outline-primary button">Delete a book</a>
            </div>
            <div class="col-lg-6">
              <a href="deletemember.php" type="button" class="btn btn-outline-primary button">Delete a member</a>
            </div>
          </div>
          <img src="img/men.png" alt="men">
        </div>
      </div>
    </div>

  </body>
</html>
