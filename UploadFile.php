<?php

$name = $_FILES['file']['name'];
$tmp_name = $_FILES['file']['tmp_name'];

if(isset($name) && !empty($name)){

  $location = '/Directory to place the file'; //Update this to your Directory

  if(move_uploaded_file($tmp_name, $location.$name)){

    echo "Uploaded Photo";
  }
  else{

    echo "Unable to upload photo";
  }
}
 ?>
