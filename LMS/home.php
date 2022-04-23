<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Nottingham Library Managment System</title>
  <link rel="icon" href="img/favicon.png">
  <!-- Bootstrap CSS and JS CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <!-- Custom stylesheet -->
  <link rel="stylesheet" href="css/home.css">
  <!-- Google Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@700&family=Poppins&display=swap" rel="stylesheet">
</head>

<body>

  <div class="container-fluid top">
    <img class="logo" src="img/nott-logo.jpg" alt="unm logo">
  </div>

  <div class="container-fluid mid">
    <h1 class="title">Nottingham Library Management System</h1>
    <p class="des">Howdy Notts Librarian! Welcome to the LMS Application where you can add new books and members, update details, search or even delete something</p>
    <button type="button" class="btn btn-primary btn-lg left" data-bs-toggle="modal" data-bs-target="#login">Launch Application</button>
    <a href="help.php"><button type="button" class="btn btn-outline-primary btn-lg right">Need Help?</button></a>
  </div>

  <!-- Login Popup -->
  <div class="modal fade" id="login" tabindex="-1" aria-labelledby="loginlabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <!-- <h5 class="modal-title" id="loginlabel">Login</h5> -->
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

          <h4 class="modalTitle">Just login yourself...</h2>

          <img class="loginImg" src="img/login.png" alt="login picture">

          <form class="form" action="auth.php" method="post">

            <!-- uname input -->
            <?php if(isset($_GET['error'])){ ?>
              <script>alert("Blank Field OR Invalid Credentials. Press [OK] to redirect and try again!")</script>
            <?php }?>

            <div class="form-outline mb-2">
              <label class="form-label">Username</label>
              <input type="text" name="username" class="form-control" />
            </div>

            <!-- password input -->
            <div class="form-outline mb-2">
              <label class="form-label">Password</label>
              <input type="password" name="password" class="form-control" />
            </div>

            <div class="d-grid submit">
              <button type="submit" class="btn btn-primary login" data-bs-dismiss="modal">Login</button>
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid footer">
    <img src="img/Login-Footer.png" alt="Login Footer Image">
  </div>

</body>

</html>
