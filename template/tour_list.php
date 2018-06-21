  <?php
     
    $sql = "select * from tours where city_id = '".$tour_city."'";
    $tour_list_res  = mysql_query($sql,$connection);
	$new_tour_list = mysql_query($sql,$connection);
	$newhotel_id = '-1';
	while($new_row =(mysql_fetch_array($new_tour_list ))) {
	  if($tour_id == $new_row['service_id']) continue;
	  $newtour_id = $new_row['service_id'];
	  $newtour_name = $new_row['tour_name'];
	}
	if($newhotel_id == '-1'){
	 $newhotel_id = $tour_id;
	  $newhotel_name = "No other Tour is available right now.";
	}
	
   ?>
 
 <div class="alternate_hotel">
    
    <!--- alternate tour description-->   
     <h1>Alternative Tours</h1>
    </div>      
   <p class="panel-subhead">The following Tours are available in <b><?php echo $tour_city;?></b> and can be booked now.</p>
  
  
<!--- list of different hotels  -->

<div class="hotel_list round_div">
  <ul class="hotets">
    <?php  
	 $list_num =  0;
	 $limit = 5;
	while($tour_list =(mysql_fetch_array($tour_list_res ))) { 
	    
        if($tour_list['service_id'] == $tour_id)	 continue;	
		$list_num = $list_num + 1 ;	
		?> 
		 <li class="hotels_li">
			 <a href="#" style="float:left;"><img src="<?php echo $tour_list['Image'];?>" width="50" height="35" /></a>  <!--- hotel image  -->  
			 <div class="hotels_top">			    
			     
				 <a href="index.php?id=<?php echo $tour_list['service_id'] ;?>" style="text-align:left;">
				 <span class="span_hotels"> <?php echo $tour_list['tour_name']; ?></span><!---  hotel name  -->				 	 				  
				 </a>	
				 <br/>
				<address class="address"><?php echo $tour_list['tour_type'].", ".$tour_list['tour_category'].", ".$tour_list['city_id'] ; ?></address> <!---  hotel address  -->
			 <!-- end of hotels address--></div>
			 <div class="hotels_right">
			   <div class="hotels_right_price">Time:</div> 
			   <span class="hotel-rack"><?php echo $tour_list['start_time']." - ".$tour_list['end_time']; ?>  </span> <!---  hotel rack price -->
			    
			 <!-- end of hotels price--></div>			 
			 <div class="clear"></div>
			  <!--- for the last row the line is not print-->
			 <?php if($list_num != $limit){?>
			 <hr color="#cccccc"/>  <!--- horizental line -->
			 <?php }?>
			 
		</li>      
		<?php if($list_num == $limit) break;?>
		<?php  }?>
  </ul>
   
</div> 
