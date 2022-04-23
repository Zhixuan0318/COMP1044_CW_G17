<?php

include("connectDB.php");
$uname = "";
$pw= "";

//reformat input and prevent html and js injection
function reformat($input) {
  $input = trim($input);
  $input = stripslashes($input);
  $input = htmlspecialchars($input);
  return $input;
}

if(isset($_POST['username']) && isset($_POST['password'])){
  $uname = reformat($_POST['username']);
  $pw = reformat($_POST['password']);
}

//empty field checking
if(empty($uname)){
  header('Location: home.php?error=blank field');
}
if(empty($pw)){
  header('Location: home.php?error=blank field');
}

//DB query
$sql = " SELECT * FROM users WHERE username = '$uname' AND password = '$pw' ";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result)===1){ //find one result (= exists in DB)

  $row = $result->fetch_assoc();

  if ($row['username'] === $uname && $row['password'] === $pw){
    header("Location: admin.php");
  }else{
    header("Location: home.php?error=incorect-credentials");
  }
}else{
  header("Location: home.php?error=incorect-credentials");
}

?>
