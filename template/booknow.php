<div class="amend_dates">
    <h3 style="line-height:3px;">You have searched for 1 night </h3>
    <link rel="stylesheet" href="css/base/jquery.ui.all.css">
	<script src="js/jquery-1.6.2.js"></script>
	<script src="js/jquery.ui.core.js"></script>
	<script src="js/jquery.ui.widget.js"></script>
	<script src="js/jquery.ui.datepicker.js"></script>
     <script>
	$(function() {
		$( "#sdate" ).datepicker(); <!--- start date input picker -->
		$( "#edate" ).datepicker(); <!--- end date input picker -->
	});
	</script>
    <label class="sdate"> Check In: <input type="text" value="" id="sdate"  ><img src="images/calendar.png" width="25" height="22" style="top:5px;position:relative;" />
</label> <!--- start date input picker -->
     
    &nbsp;&nbsp;<label class="sdate">  Check Out: <input type="text" value="" id="edate"  > <img src="images/calendar.png" width="25" height="22" style="top:5px;position:relative;" />
  </label> <!--- etart date input picker -->
    &nbsp;&nbsp;<label for="adults">  <!--- number of adults picker -->
                  Adults:
                  <select name="adults" id="adults"><option>1</option>
                <option selected="selected">2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
                <option>10</option>
                </select>
                </label>
                
              &nbsp;&nbsp;  <label for="children">  <!--- number of children picker -->
                  Children:
                  <select name="children" id="children"><option selected="selected">0</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                    </select>
                </label>
 <!-- end od amenddates-->     </div>
          
  <div class="making_book">
    <div class="making_book_list">
      <table   border="0" cellpadding="0" cellspacing="0" class="booking_list_table">
      <tr>
        <th class="room_type rboder">Room Type</th>     <!--- room type -->
        <th class="room_service rboder"></th>            <!--- food -->
        <th class="occupation rboder">Max<br/> Occupancy</th>   <!--- Occupancy picture -->
        <th class="room_price rboder">Price Per Night</th>     <!--- Per night Cost -->
        <th class="room_number rboder">No of rooms</th>       <!--- number of room  to hire -->
      </tr>
          <tr>
            <td class="room_type rboder_list rboder_list_right">&nbsp;</td>  <!--- room type -->
            <td class="room_service rboder_list rboder_list_right">&nbsp;</td>  <!--- food -->
            <td class="occupation rboder_list rboder_list_right">&nbsp;</td>  <!--- Occupancy picture -->
            <td class="room_price rboder_list rboder_list_right" style="background:#fffff0;">&nbsp;</td>    <!--- Per night Cost -->
            <td class="room_number rboder_list">&nbsp;</td> <!--- number of room  to hire -->
          </tr>
          <tr>
           <td class="room_type rboder_list rboder_list_right">&nbsp;</td>  <!--- room type -->
            <td class="room_service rboder_list rboder_list_right">&nbsp;</td> <!--- food -->
            <td class="occupation rboder_list rboder_list_right">&nbsp;</td>  <!--- Occupancy picture -->
            <td class="room_price rboder_list rboder_list_right" style="background:#fffff0;">&nbsp;</td>   <!--- Per night Cost -->
            <td class="room_number rboder_list">&nbsp;</td> <!--- number of room  to hire -->
          </tr>
                
          
           
    </table>

    </div>
    <div class="making_book_right">
      <div class="empty_book">  <!--- right side panel for booking summary -->
       Booking Summary
      </div>
      <div class="empty_book_mid">
      </div>
      <div class="empty_book_end">
      </div>
    </div>
    <div class="clear"></div>
<!-- end od booking-->  </div>     
 
 		<!--- short description of hotel -->   
    <div class="room_article">     
     <p>A credit card is required to secure your reservation.</p>
          
     
<!-- end od booking-->     </div>      
   