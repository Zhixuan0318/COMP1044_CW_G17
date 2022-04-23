<?php
  include("connectDB.php");
  date_default_timezone_set('Asia/Kuala_Lumpur');
  if(isset($_POST['submit'])){
    $book_title = $_POST['book_title'];
    $category = $_POST['category'];
    $author = $_POST['author'];
    $book_copies = $_POST['book_copies'];
    $publisher = $_POST['publisher'];
    $publisher_name = $_POST['publisher_name'];
    $isbn = $_POST['isbn'];
    $copyright_year = $_POST['copyright_year'];
    $timestamp = date("Y-m-d H:i:s");
    $status = $_POST['status'];

    $sql = "INSERT INTO book (book_id, book_title, category, author, book_copies, publisher, publisher_name, isbn, copyright_year, date_added, status, borrow_id) VALUES (NULL, '$book_title', '$category', '$author','$book_copies', '$publisher', '$publisher_name', '$isbn', '$copyright_year', '$timestamp', '$status', NULL)";
    $result = mysqli_query($conn,$sql);

  }

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Add Book-Nottingham Library Managment System</title>
    <link rel="icon" href="img/favicon.png">
    <!-- Bootstrap CSS and JS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Datepicker css and js cdn -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/css/datepicker.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/js/bootstrap-datepicker.min.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/2.3.2/js/bootstrap.min.js"></script>
    <!-- Custom stylesheet -->
    <link rel="stylesheet" href="css/addbook.css">
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
            <form class="form" action="addbook.php" method="post">
                <h2 class="formtitle">Add a new book</h2>
                <!-- booktitle -->
                <div class="form-outline mb-3">
                  <label class="form-label">Book Title</label>
                  <input type="text" name="book_title" class="form-control" placeholder="Example: Algebra 2"/>
                </div>
                <!-- category -->
                <div class="form-outline mb-3">
                  <label class="form-label">Category</label>
                  <input type="text" name="category" class="form-control" placeholder="Example: Math"/>
                </div>
                <!-- author -->
                <div class="form-outline mb-3">
                  <label class="form-label">Author</label>
                  <input type="text" name="author" class="form-control" placeholder="Example: Glencoe McGraw Hill"/>
                </div>
                <!-- bookcopies -->
                <div class="form-outline mb-3">
                  <label class="form-label">Book Copies</label>
                  <input class="form-control" type="number" name="book_copies" min="1" placeholder="Enter a number">
                </div>
                <!-- publisher -->
                <div class="form-outline mb-3">
                  <label class="form-label">Publisher</label>
                  <input type="text" name="publisher" class="form-control" placeholder="Example: The McGrawHill Companies Inc."/>
                </div>
                <!-- publishername -->
                <div class="form-outline mb-3">
                  <label class="form-label">Publisher Name</label>
                  <input type="text" name="publisher_name" class="form-control" placeholder="McGrawhill"/>
                </div>
                <!-- isbn -->
                <div class="form-outline mb-3">
                  <label class="form-label">ISBN</label>
                  <input type="text" name="isbn" class="form-control" placeholder="Example: 978-0-07-873830-2"/>
                </div>
                <!-- copyrightyear -->
                <div class="form-outline mb-3">
                  <label class="form-label">Copyright Year</label>
                  <input type="text" class="form-control" name="copyright_year" id="datepicker" placeholder="Choose a year"/>
                </div>
                <!-- status -->
                <div class="form-outline mb-3">
                  <label class="form-label">Status</label>
                  <input type="text" name="status" class="form-control" placeholder="Example: New"/>
                </div>
                <div class="submit">
                  <button name="submit" type="submit" class="btn btn-primary add">Submit</button>
                </div>
            </form>
          </div>
        </div>

      </div>
    </div>
    <script>
      $(document).ready(function(){
        $("#datepicker").datepicker({
          format: "yyyy",
          viewMode: "years",
          minViewMode: "years",
          autoclose:true
        });
      })
    </script>
  </body>
</html>
