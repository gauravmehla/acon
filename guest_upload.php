<?php

if($_REQUEST['act']){
  $_REQUEST['act']();
}

function upload_temp_video(){
$allowedExts = array("mov", "mp4", "avi", "mpeg");
$temp = explode(".", $_FILES["upload"]["name"]);
$extension = end($temp);
echo $extension;
if ((($_FILES["upload"]["type"] == "video/mov")|| ($_FILES["upload"]["type"] == "video/mp4")
|| ($_FILES["upload"]["type"] == "video/avi")|| ($_FILES["upload"]["type"] == "video/mpeg"))
&& in_array($extension, $allowedExts)) 
{
  if ($_FILES["upload"]["error"] > 0) 
  {
    echo "Return Code: " . $_FILES["upload"]["error"] . "<br>";
  }
  else 
  {
    
    if (file_exists("library/temp/videos/" . $_FILES["upload"]["name"])) 
    {
      header("Location:guest.php?msg=Already exists.");
    } 
    else {
      move_uploaded_file($_FILES["upload"]["tmp_name"],"library/temp/videos/" . $_FILES["upload"]["name"]);
      header("Location:guest.php?msg=Uploaded Successfully Sent To ADMIN for Confirmation.");
    }
  }
}
 else {
  header("Location:guest.php?msg=Invalid File.");
}
}

/*  -------------- UPLOAD BOOK --------------*/

function upload_temp_book(){
$allowedExts = array("rar", "pdf", "doc", "txt");
$temp = explode(".", $_FILES["upload"]["name"]);
$extension = end($temp);
echo $extension;
if ((($_FILES["upload"]["type"] == "application/rar")|| ($_FILES["upload"]["type"] == "application/pdf")
|| ($_FILES["upload"]["type"] == "application/txt")|| ($_FILES["upload"]["type"] == "application/doc"))
&& in_array($extension, $allowedExts)) 
{
  if ($_FILES["upload"]["error"] > 0) 
  {
    echo "Return Code: " . $_FILES["upload"]["error"] . "<br>";
  }
  else 
  {
    
    if (file_exists("library/temp/ebook/" . $_FILES["upload"]["name"])) 
    {
      header("Location:guest.php?msg=Already exists.");
    }

    else {
      move_uploaded_file($_FILES["upload"]["tmp_name"],"library/temp/ebook/" . $_FILES["upload"]["name"]);
      header("Location:guest.php?msg=Uploaded Successfully Sent To ADMIN for Confirmation.");
    }
  }
}
 else {
  header("Location:guest.php?msg=Invalid File.");
}
}
?>