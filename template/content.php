 
    <!--- image of hotel-->   
    <div  class="hotel_descripttion">
      <div class="hotel_info_left">
         <div class="hotel_info_img"> 
            <!--- full image of hotel -->   
            <img  id="hotel_img_gallery" src="<?php echo $img_link; ?>" width="287" height="260" />
          </div> 
    <!--end of left side  -->  </div>
    <div class="hotel_info_mid">
       <div class="hotel_info_mid_top" id="hotel_info_mid_top" > 
         <!--descripttion of hotel  -->
		     <?php			 
			 echo "<p id=\"hotel_des\">".$tour_description."</p>";
			 ?>
 
         </div>       
       <div class="hotel_info_mid_mid"> 
           <br/>
           <div class="hotel_info_mid_mid_rating">
              <div class="hotel_rating_circle"> 
                  <span  style="margin: 0;    outline: 0 none; padding: 0;"></span> <!--rating value of hotel  -->
                  <div class="ratingtxt">rating</div>
              </div>
              <p class="basedon">based on  reviews</p> <!--rating base on reviews  -->
           <!-- end of rating --></div>
           <div  class="hotel_info_mid_mid_review">
           <!--description  base on reviews  -->
		   <p><?php echo $external_remark ;?></p>
           
          <!-- end of rating --> </div>
         </div>   
   <!--end of left side  -->  </div>
        <div class="hotel_info_reeg">
          <div class="price-summary-top">
           <p style="text-align:center;">About Tour</p>
           </div>
           <div class="price-summary-mid summary-top">
             <p>Catagory - <?php echo $tour_category;?></p>
			 <p>Tour Type - <?php echo $tour_type;?></p>
			  <p>Start Time - <?php echo $tour_start;?></p>
			 <p>End Time - <?php echo $tour_end;?></p>
          </div>
            
          <div class="price-summary-end">
            <p style="text-align:center;margin-top:8px;"><a href="#">CHECK RATES</a>   </p>
          </div>
       <!--end of right side  --></div>
        <div class="clear"></div>    
  <!--end of hotel data -->     </div>
   
  
