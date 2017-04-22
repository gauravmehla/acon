<?php

if($_REQUEST['file_type']=='ebook'){
      
      $tmp_name = $_REQUEST['file_name'];
      $name  = basename($tmp_name);
        if(!empty($name))
        {

          $location = "library/ebooks/";

          if(copy($tmp_name, $location.$name)){
            if(unlink($tmp_name)){
              header("Location:home.php?msg=File Uploaded Successfully..!");
            }
          }
          
        }
        

}

/*  -------------- UPLOADED BOOK --------------*/


elseif($_REQUEST['file_type']=='video'){
      $tmp_name = $_REQUEST['file_name'];
      $name  = basename($tmp_name);
        if(!empty($name))
        {

          $location = "library/videos/";

          if(copy($tmp_name, $location.$name)){
            if(unlink($tmp_name)){
              header("Location:home.php?msg=File Uploaded Successfully..!");
            }
          }
          
        }
        
}



?>