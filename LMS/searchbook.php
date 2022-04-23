<?php
  include("connectDB.php");
  if(isset($_POST['submit'])){
    $book = $_POST['search'];
    $sql = "SELECT * FROM book WHERE book_title LIKE '%$book%'";
    $list = mysqli_query($conn,$sql);
    $result = $list->fetch_assoc();
    if(empty($result['book_id'])){
      //ignore other queries
    }else{
      $sql2 = "SELECT member.firstname, member.lastname, member.member_id FROM member, book, borrow WHERE (book.book_title LIKE '%$book%') AND (book.borrow_id = borrow.borrow_id) AND (borrow.member_id = member.member_id)";
      $list2 = mysqli_query($conn,$sql2);
      $result2 = $list2->fetch_assoc();
    }
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Search Book-Notitngham Library Management System</title>
    <link rel="icon" href="img/favicon.png">
    <!-- Bootstrap CSS and JS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Custom stylesheet -->
    <link rel="stylesheet" href="css/searchbook.css">
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
            <form class="form" action="searchbook.php#sec3" method="post">
                <h2 class="formtitle">Search for a book</h2>
                <!-- book title -->
                <div class="form-outline mb-3">
                  <input type="text" name="search" class="form-control" placeholder="Enter a book title. Example: Algebra 2"/>
                </div>
                <div class="submit">
                  <button name="submit" type="submit" class="btn btn-primary search">Search</button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="footer container-fluid">
      <div class="searchresult">
        <div class="inlinebox">
          <h2 id="sec3" class="searchtitle">Search Result | Status: </h2>
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
              <p class="stitle">Book ID: </p>
              <p class="sresult"><?php if(isset($result['book_id'])){echo $result['book_id'];}?></p>
            </div>
            <div class="searchtag">
              <p class="stitle">Book title: </p>
              <p class="sresult"><?php if(isset($result['book_id'])){echo $result['book_title'];}?></p>
            </div>
            <div class="searchtag">
              <p class="stitle">Category: </p>
              <p class="sresult"><?php if(isset($result['book_id'])){echo $result['category'];}?></p>
            </div>
            <div class="searchtag">
              <p class="stitle">Author: </p>
              <p class="sresult"><?php if(isset($result['book_id'])){echo $result['author'];}?></p>
            </div>
            <div class="searchtag">
              <p class="stitle">Book copies: </p>
              <p class="sresult"><?php if(isset($result['book_id'])){echo $result['book_copies'];}?></p>
            </div>
            <div class="searchtag">
              <p class="stitle">Publisher: </p>
              <p class="sresult"><?php if(isset($result['book_id'])){echo $result['publisher'];}?></p>
            </div>
            <div class="searchtag">
              <p class="stitle">Publisher Name: </p>
              <p class="sresult"><?php if(isset($result['book_id'])){echo $result['publisher_name'];}?></p>
            </div>
          </div>
          <div class="col-lg-6 col-md-12">

            <!-- smalltag -->
            <div class="searchtag">
              <p class="stitle">ISBN: </p>
              <p class="sresult"><?php if(isset($result['book_id'])){echo $result['isbn'];}?></p>
            </div>
            <div class="searchtag">
              <p class="stitle">Copyright Year: </p>
              <p class="sresult"><?php if(isset($result['book_id'])){echo $result['copyright_year'];}?></p>
            </div>
            <div class="searchtag">
              <p class="stitle">Date added: </p>
              <p class="sresult"><?php if(isset($result['book_id'])){echo $result['date_added'];}?></p>
            </div>
            <div class="searchtag">
              <p class="stitle">Status: </p>
              <p class="sresult"><?php if(isset($result['book_id'])){echo $result['status'];}?></p>
            </div>
            <div class="searchtag">
              <p class="stitle">Borrow ID: </p>
              <p class="sresult"><?php if(isset($result['book_id'])){echo $result['borrow_id'];}?></p>
            </div>
            <div class="searchtag">
              <p class="stitle">Borrow by (member): </p>
              <p class="sresult"><?php if(isset($result2['firstname'])){echo $result2['firstname']." ".$result2['lastname'];}?></p>
            </div>
            <div class="searchtag">
              <p class="stitle">Borrower member ID: </p>
              <p class="sresult"><?php if(isset($result2['member_id'])){echo $result2['member_id'];}?></p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </body>
</html>
