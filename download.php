<?php
	include('inc/db_connect.php');
	$class=$_REQUEST['st_class'];
	$stream=$_REQUEST['st_stream'];
	$sem=$_REQUEST['st_sem'];

	if ($class=='4') {
		if ($stream=='cse') {
			if ($sem=='1') {
				header("location:library/first_sem_cse.rar");
			}
			elseif ($sem=='2') {
				header("location:library/second_sem_cse.rar");
			}
			elseif ($sem=='3') {
				header("location:library/third_sem_cse.rar");
			}
			elseif ($sem=='4') {
				header("location:library/fourth_sem_cse.rar");
			}
			elseif ($sem=='5') {
				header("location:library/fifth_sem_cse.rar");
			}
			elseif ($sem=='6') {
				header("location:library/sixth_sem_cse.rar");
			}
		}
	}
?>