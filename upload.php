<?php

if($_REQUEST['act']){
  $_REQUEST['act']();
}

function upload_video(){
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
    echo "Upload: " . $_FILES["upload"]["name"] . "<br>";
    echo "Type: " . $_FILES["upload"]["type"] . "<br>";
    echo "Size: " . ($_FILES["upload"]["size"] / 1024) . " kB<br>";
    echo "Temp file: " . $_FILES["upload"]["tmp_name"] . "<br>";
    
    if (file_exists("library/videos/" . $_FILES["upload"]["name"])) 
    {
      header('Location:library.php?msg=Already exists.');
    } 
    else {
      move_uploaded_file($_FILES["upload"]["tmp_name"],"library/videos/" . $_FILES["upload"]["name"]);
      header('Location:library.php?msg=Uploaded Successfully.');
    }
  }
}
 else {
  header('Location:library.php?msg=Invalid File.');
}
}

/*  -------------- UPLOAD BOOK --------------*/

function upload_book(){
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
    
    if (file_exists("Upload/videos/" . $_FILES["upload"]["name"])) 
    {
      header('Location:library.php?msg=Already exists.');
    }

    else {
      move_uploaded_file($_FILES["upload"]["tmp_name"],"library/ebooks/" . $_FILES["upload"]["name"]);
      header('Location:library.php?msg=Uploaded Successfully.');
    }
  }
}
 else {
  header('Location:library.php?msg=Invalid File.');
}
}
?>