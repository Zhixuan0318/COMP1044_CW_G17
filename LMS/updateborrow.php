<?php
  include("connectDB.php");
  if (isset($_GET['update_borrow'])) {
    $borrow_id = $_GET['update_borrow'];
    $sql = "SELECT * FROM borrow WHERE borrow_id=".$borrow_id;
    $list = mysqli_query($conn,$sql);
    $result = $list->fetch_assoc();
  }

  if(isset($_POST['submit'])){
    $borrow_id = $_POST['borrow_id'];
    $member_id = $_POST['member_id'];
    $date_borrowed = $_POST['date_borrowed'];
    $due_date = $_POST['due_date'];
    $book_id = $_POST['book_id'];
    $date_returned = $_POST['date_returned'];

    $sql = "UPDATE borrow SET
            member_id = '$member_id',
            date_borrowed = '$date_borrowed',
            due_date = '$due_date',
            book_id = '$book_id',
            date_returned = '$date_returned'
            WHERE borrow_id = $borrow_id";
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
    <link rel="stylesheet" href="css/borrow.css">
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
          <h2 class="subtitle">1 | Select borrow record from the list</h2>

          <!-- table list -->
          <div class="tablebox">
          <table>
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Book</th>
                <th class="edit">Action</th>
              </tr>
            </thead>

            <tbody>
              <?php
                include"connectDB.php";
                $sql = "SELECT borrow.borrow_id, member.firstname, member.lastname, book.book_title FROM borrow, member, book WHERE (borrow.member_id = member.member_id) AND (borrow.book_id = book.book_id)";
                $list = mysqli_query($conn, $sql);

                $x = 1; while ($row = mysqli_fetch_array($list)) { ?>
                  <tr>
				            <td class="form-borrowid"> <?php echo $row['borrow_id'] ?> </td>
                    <div class="member-name-width">
                      <td class="member-name"> <?php echo $row['firstname']." ".$row['lastname'] ?> </td>
                    </div>
                    <td class="form-booktitle"> <?php echo $row['book_title'] ?> </td>
				            <td class="edit">
                      <a href="updateborrow.php?update_borrow=<?php echo $row['borrow_id'] ?>#sec"><img class="edit-icon" src="https://img.icons8.com/ios-glyphs/30/000000/edit--v1.png"/></a>
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
      <h2 class="sec2-title">2 | Update details of borrow record</h2>
      <div class="formcontainer">
        <!-- form -->
        <form class="form" action="updateborrow.php" method="post">
            <div class="form-outline mb-3">
              <label class="form-label">Borrow ID</label>
              <input type="text" name="borrow_id" class="form-control" placeholder="Type <?php if (isset($_GET['update_borrow'])){echo $result['borrow_id'];}?> to confirm update of this borrow [IMPORTANT]"/>
            </div>
            <!-- Member ID -->
            <div class="form-outline mb-3">
              <label class="form-label">Member ID</label>
              <input type="text" name="member_id" class="form-control" placeholder="Example: 1"/>
              <p class="query"><?php if (isset($_GET['update_borrow'])){echo "Previous record: ".$result['member_id'];}?></p>
            </div>
            <!-- Date borrowed -->
            <div class="form-outline mb-3">
              <label class="form-label">Date borrowed</label>
              <input type="datetime-local" step="1" name="date_borrowed" class="form-control"/>
              <p class="query"><?php if (isset($_GET['update_borrow'])){echo "Previous record: ".$result['date_borrowed'];}?></p>
            </div>
            <!-- Due date -->
            <div class="form-outline mb-3">
              <label class="form-label">Due date</label>
              <input type="datetime-local" step="1" name="due_date" class="form-control"/>
              <p class="query"><?php if (isset($_GET['update_borrow'])){echo "Previous record: ".$result['due_date'];}?></p>
            </div>
            <!-- Book ID -->
            <div class="form-outline mb-3">
              <label class="form-label">Book ID</label>
              <input type="text" name="book_id" class="form-control" placeholder="Example: 1"/>
              <p class="query"><?php if (isset($_GET['update_borrow'])){echo "Previous record: ".$result['book_id'];}?></p>
            </div>
            <!-- Date returned -->
            <div class="form-outline mb-3">
              <label class="form-label">Date returned</label>
              <input type="datetime-local" step="1" name="date_returned" class="form-control"/>
              <p class="query"><?php if (isset($_GET['update_borrow'])){echo "Previous record: ".$result['date_returned'];}?></p>
            </div>
            <div class="submit">
              <button name="submit" type="submit" class="btn btn-primary add">Update</button>
            </div>
        </form>
      </div>

    </div>
  </body>
</html>
