<?php

$BSC =    $_POST['BSC'];

if (isset($_POST['submit'])) {
  $sql = "INSERT INTO users(BSC) VALUES ('$BSC')";
  if(mysqli_query($conn, $sql)){
    header('Location: index.php');
  }else{
    echo 'Error: ' .mysqli_error($conn);
  }
}
?>