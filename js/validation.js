function valid_student(frm_obj)
{
	if(frm_obj.st_name.value=="")
	   {
		   alert("Please enter Your Name");
		   frm_obj.st_name.focus();
		   return false;
		}
		
		
		if(frm_obj.st_father.value=="")
	   {
		   alert("Please enter Your Father Name");
		   frm_obj.st_father.focus();
		   return false;
		}
		
		if(frm_obj.st_city.value==0)
	   {
		   alert("Please enter Your City");
		   frm_obj.st_city.focus();
		   return false;
		}
		
		if(frm_obj.st_gender[0].checked == false && frm_obj.st_gender[1].checked == false)
	   {
		   alert("Please enter Your Gender");
		   frm_obj.st_gender[0].focus();
		   return false;
		}
		return true;
}

function student_delete(st_id)
{
	if(confirm("Do you Wan't to delete..!"))
	{
		this.document.student_view.st_id.value=st_id;
     	this.document.student_view.act.value="student_delete";
  	    this.document.student_view.submit();
		}
	}

	function teacher_delete(em_id)
{
	if(confirm("Do you Wan't to delete Teacher..!"))
	{
		this.document.teacher_view.em_id.value=em_id;
     	this.document.teacher_view.act1.value="teacher_delete";
  	    this.document.teacher_view.submit();
		}
	}

	function message_delete(msg_id,msg_st_id)
{
	if(confirm("Do you Wan't to delete This Message..!"))
	{

		this.document.message_wall.msg_id.value=msg_id;
		this.document.message_wall.msg_st_id.value=msg_st_id;
     	this.document.message_wall.act2.value="message_delete";
  	    this.document.message_wall.submit();
		}
	
	}

	function delete_score(score_id)
{
	if(confirm("Do you Wan't to delete Student Score..!"))
	{

		this.document.score.score_id.value=score_id;
     	this.document.score.act.value="delete_score";
  	    this.document.score.submit();
		}
	
	}

	function message_delete_teacher(msg_id,msg_em_id)
{
	if(confirm("Do you Wan't to delete Teacher Message..!"))
	{

		this.document.message_wall_teacher.msg_id.value=msg_id;
		this.document.message_wall_teacher.msg_em_id.value=msg_em_id;
     	this.document.message_wall_teacher.act2.value="message_delete_teacher";
  	    this.document.message_wall_teacher.submit();
		}
	
	}

	function member_delete(mem_id)
{
	if(confirm("Do you Wan't to Remove..!"))
	{

		this.document.member_view.mem_id.value=mem_id;
     	this.document.member_view.act3.value="member_delete";
  	    this.document.member_view.submit();
		}
	
	}

	function message_delete_1(msg_id,msg_st_id)
{
	if(confirm("Do you Wan't to delete This Message..!"))
	{

		this.document.message_wall_1.msg_id.value=msg_id;
		this.document.message_wall_1.msg_st_id.value=msg_st_id;
     	this.document.message_wall_1.act3.value="message_delete_1";
  	    this.document.message_wall_1.submit();
		}
	
	}

function showHint_1(str)
  {
  	
  if (str.length==0)
    {
    document.getElementById("txtHint_1").innerHTML="";
    return;
    }

  xmlhttp=new XMLHttpRequest();

  xmlhttp.onreadystatechange=function()
    {
    if (xmlhttp.readyState==4 && xmlhttp.status==200)
      {
      document.getElementById("txtHint_1").innerHTML=xmlhttp.responseText;
      }
    }
  xmlhttp.open("GET","get_list_1.php?q="+str,true);
  xmlhttp.send();
}

$('#msg_cancel').click(function(){
	$('#msg_cancel').hide();
});

$(function(){

  $('a.show-content').click(function(){
    $(this).find('span').animate({
      height:'+=80px'
    },300)
  }).click(function(){
    $(this).find('span').animate({
      height:'-=80px'
    },200)
  });
  
});

function showHint(str)
  {
  	
  if (str.length==0)
    {
    document.getElementById("txtHint").innerHTML="";
    return;
    }

  xmlhttp=new XMLHttpRequest();

  xmlhttp.onreadystatechange=function()
    {
    if (xmlhttp.readyState==4 && xmlhttp.status==200)
      {
      document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
      }
    }
  xmlhttp.open("GET","get_list.php?q="+str,true);
  xmlhttp.send();
}
