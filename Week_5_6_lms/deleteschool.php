<?php
  require('connect.php');

  if(isset($_POST['id'])){
    $id = $_POST['id'];
    $query = "DELETE FROM schools WHERE `id` = '$id'";
    $school = mysqli_query($connect, $query);

    if($school){
      echo 'School was deleted successfully!';
      header('Location: index.php');
    }else{
      echo "Failed: " . mysqli_error($connect);
    }

  }else{
    echo "Not Authorized";
  }

?>