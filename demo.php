
  
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
  <style>
    
  </style>
  <script>
  $(function() {
    $( "#draggable" ).draggable();
  });
  </script>
<div id="draggable" class="ui-widget-content">
  <p><table width="100%"><tr><td><input class="search_textbox" type="text" name="textfield" id="search_textfield" onkeyup="showHint_1(this.value)" placeholder="Search Student"></td><td><center><img src="images/button_cancel.png" height="22" width="22" alt="" id="reset" style="position: relative;top: 0px;"></center></td></tr></table><p>
    <div id="txtHint_1"></div>
  </p>
</p>
</div>
