<?php include ('config/connection.php');?>

<?php 
    if(isset($_GET['id'])){
	   $tour_id = $_GET['id'];	   
	   }
	else{
	    $temp_res_for_id = mysql_query("select service_id from tours",$connection);
		$temp_row = mysql_fetch_array($temp_res_for_id);
	    $tour_id = $temp_row['service_id'];		
    }	
    $sql = "select * from tours where service_id=".$tour_id;
    $tour_info = mysql_query($sql,$connection);
    $row = mysql_fetch_array($tour_info);
	$tour_name = $row['tour_name'];
	$tour_firstline = $row['tour_firstline'];
	$tour_description = $row['tour_details'];
	$tour_category = $row['tour_category'];
	$tour_type = $row['tour_type'];
	$tour_city = $row['city_id'];
	$tour_start = $row['start_time'];
	$tour_end = $row['end_time']; 
	$img_link = $row['Image'];
	$user_update = $row['user_update'];
	$update_date = $row['date_update'];
    $external_remark = $row['remark_external']; 
	 
   
?> 