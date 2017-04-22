<?php
include('inc/db_connect.php');
$sql="SELECT * FROM student";
$rs = mysql_query($sql) or die(mysql_error());

while($data = mysql_fetch_assoc($rs)){
  $a[] = $data['st_name'];
  }



//get the q parameter from URL
$q=$_GET["q"];

//lookup all hints from array if length of q>0
if (strlen($q) > 0)
  {
  $hint="";
  for($i=0; $i<count($a); $i++)
    {
    if (strtolower($q)==strtolower(substr($a[$i],0,strlen($q))))
      {
      if ($hint=="")
        {
        $hint=$a[$i];
        }
      else
        {
        $hint=$hint.",".$a[$i];
        }
      }
    }
  }

// Set output to "no suggestion" if no hint were found
// or to the correct values
if ($hint == "")
  {
  $response="no suggestion";
  }
else
  {
  $response=$hint;
  }

//output the response
  echo '<table width="90%" height="50"  align="center" class="table_css">';
  echo "<tr><td> Id </td><td> Roll No </td><td> Name </td><td> Mobile </td><td> Action </td></tr>";
  $result = explode(',', $response);
  foreach ($result as $key) {
      $sql1="SELECT * FROM student WHERE st_name='$key'";
      $rs1=mysql_query($sql1) or die(mysql_error());
      $data1=mysql_fetch_array($rs1);
      
?>


        <tr>
        <td><?php echo $data1['st_id']; ?></td>
        <td><?php echo $data1['st_rollno']; ?></td>
        <td><?php echo $data1['st_name']; ?></td>
        <td><?php echo $data1['st_mobile']; ?></td>
        <td><center><a href="view_score.php?st_id=<?php echo $data1['st_id'];?>">View Score Card</a></center></td>
        </tr>    
<?php
  }
?>

</table>