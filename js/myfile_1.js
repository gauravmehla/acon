$('#msg_cancel').click(function(){
      $('#message1').hide();
 });

$('#reset').click(function(){
				$('#search_textfield').val('');
				showHint_1("");
				$( "#search_textfield" ).focus();
			});
