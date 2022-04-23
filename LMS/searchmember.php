<?php
  include("connectDB.php");
  if(isset($_POST['submit'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $sql = "SELECT * FROM member WHERE firstname = '$firstname' AND lastname = '$lastname'";
    $list = mysqli_query($conn,$sql);
    $result = $list->fetch_assoc();

    if(empty($result['member_id'])){
      //ignore other queries
    }else{
      $type_id = $result['type_id'];
      $sql2 = "SELECT borrower_type FROM type WHERE type_id = '$type_id'";
      $list2 = mysqli_query($conn,$sql2);
      $result2 = $list2->fetch_assoc();

      $book_id = $result['book_id'];
      $sql3 = "SELECT book_title FROM book WHERE book_id = '$book_id'";
      $list3 = mysqli_query($conn,$sql3);
      $result3 = $list3->fetch_assoc();

      $user_id = $result['user_id'];
      $sql4 = "SELECT firstname, lastname FROM users WHERE user_id = '$user_id'";
      $list4 = mysqli_query($conn,$sql4);
      $result4 = $list4->fetch_assoc();
    }
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Search Member-Nottingham Library Management System</title>
    <link rel="icon" href="img/favicon.png">
    <!-- Bootstrap CSS and JS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Custom stylesheet -->
    <link rel="stylesheet" href="css/searchmember.css">
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@700&family=Poppins&display=swap" rel="stylesheet">
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 col-md-12 vh-100 left">
          <h1 class="title">Hmm...still finding something~</h1>
          <img class="coffee" src="img/searchguy.png" alt="search"><br>
          <div class="buttongrp">
            <a href="help.php"><button type="button" class="btn btn-outline-primary top">Need Help?</button></a><br>
            <a href="admin.php"><button type="button" class="btn btn-outline-primary bottom">Back to admin panel</button></a>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 vh-auto right">
          <div class="formcontainer">
            <form class="form" action="searchmember.php#sec4" method="post">
                <h2 class="formtitle">Search for a member</h2>
                <div class="inlineformbox">
                  <!-- first name -->
                  <div class="form-outline mb-3 input">
                    <input type="text" name="firstname" class="form-control" placeholder="First name"/>
                  </div>
                  <!-- last name -->
                  <div class="form-outline mb-3 input">
                    <input type="text" name="lastname" class="form-control" placeholder="Last name"/>
                  </div>
                </div>
                <div class="submit">
                  <button name="submit" type="submit" class="btn btn-primary search">Search</button>
                </div>
            </form>
          </div>
        </div>
        <div class="container-fluid footer">
          <div class="searchresult">
            <div class="inlinebox">
              <h2 id="sec4" class="searchtitle">Search Result | Status: </h2>
              <?php
                if(isset($_POST['submit'])){
                  if(empty($result['book_id'])){?>
                    <h4 class="searchstatus" style="color: red;">Not Found</h4><?php
                  }else{ ?>
                    <h4 class="searchstatus" style="color: green;">Found</h4><?php
                  }
                }
               ?>
            </div>
            <div class="row">
              <div class="col-lg-6 col-md-12">

                <!-- smalltag -->
                <div class="searchtag">
                  <p class="stitle">Member ID: </p>
                  <p class="sresult"><?php if(isset($result['member_id'])){echo $result['member_id'];}?></p>
                </div>
                <div class="searchtag">
                  <p class="stitle">First Name: </p>
                  <p class="sresult"><?php if(isset($result['member_id'])){echo $result['firstname'];}?></p>
                </div>
                <div class="searchtag">
                  <p class="stitle">Last Name: </p>
                  <p class="sresult"><?php if(isset($result['member_id'])){echo $result['lastname'];}?></p>
                </div>
                <div class="searchtag">
                  <p class="stitle">Gender: </p>
                  <p class="sresult"><?php if(isset($result['member_id'])){echo $result['gender'];}?></p>
                </div>
                <div class="searchtag">
                  <p class="stitle">Address: </p>
                  <p class="sresult"><?php if(isset($result['member_id'])){echo $result['address'];}?></p>
                </div>
                <div class="searchtag">
                  <p class="stitle">Contact: </p>
                  <p class="sresult"><?php if(isset($result['member_id'])){echo $result['contact'];}?></p>
                </div>
                <div class="searchtag">
                  <p class="stitle">Type ID: </p>
                  <p class="sresult"><?php if(isset($result['member_id'])){echo $result['type_id'];}?></p>
                </div>
              </div>
              <div class="col-lg-6 col-md-12">

                <!-- smalltag -->
                <div class="searchtag">
                  <p class="stitle">Borrower type: </p>
                  <p class="sresult"><?php if(isset($result2['borrower_type'])){echo $result2['borrower_type'];}?></p>
                </div>
                <div class="searchtag">
                  <p class="stitle">Year Level: </p>
                  <p class="sresult"><?php if(isset($result['member_id'])){echo $result['year_level'];}?></p>
                </div>
                <div class="searchtag">
                  <p class="stitle">Status: </p>
                  <p class="sresult"><?php if(isset($result['member_id'])){echo $result['status'];}?></p>
                </div>
                <div class="searchtag">
                  <p class="stitle">User ID (Librarian): </p>
                  <p class="sresult"><?php if(isset($result['member_id'])){echo $result['user_id'];}?></p>
                </div>
                <div class="searchtag">
                  <p class="stitle">Librarian's name: </p>
                  <p class="sresult"><?php if(isset($result4['firstname'])){echo $result4['firstname']." ".$result4['lastname'];}?></p>
                </div>
                <div class="searchtag">
                  <p class="stitle">Book ID: </p>
                  <p class="sresult"><?php if(isset($result['member_id'])){echo $result['book_id'];}?></p>
                </div>
                <div class="searchtag">
                  <p class="stitle">Book title: </p>
                  <p class="sresult"><?php if(isset($result3['book_title'])){echo $result3['book_title'];}?></p>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
