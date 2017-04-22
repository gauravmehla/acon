<?php include('inc/header.php'); ?>
	
<table width="24%" style="margin: auto;">
  <tr>
    <th colspan="2" scope="col"><h1>Scorer</h1><br></th>
    </tr>
  <tr>
    <th scope="row">Enter Student Name :</th>
    <td><div align="center">
      <input type="text" name="textfield" id="textfield" onkeyup="showHint(this.value)" />
    </div></td>
  </tr>
  
</table>
<div id="txtHint"></div>

<?php include('inc/footer.php'); ?>