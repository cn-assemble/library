<div class= "zone pic">
	<div>
			<input type='submit' value=' EDIT' id="edit" style="width:10em; height:5em; margin:3%; float:left;">
		</div>

		<div>
			<input type='submit' value=' ADD ' id ="add" style="width:10em; height:5em; margin:3%; float:left;">
		</div>

		<div>
			<input type='submit' value=' DELETE ' id ="delete" style="width:10em; height:5em; margin:3%; float:left;">

		</div>
        
        <div class="shelf-form" style="float:left ; ">
	    <label for='number'>Shelf Number:</label>
	    <input type='text' name='number' value='$number'class="shelf-number">
	    <label for='min'>Min:</label>
	    <input type='text' name='min' value='$min'class="shelf-min">
	    <label for='max'>Max:</label>
	    <input type='text' name='max' value='$max'class="shelf-max">
	   
	    <label for='zone'>Zone:</label>
	    <select name='zone' class = "shelf-zone">
	        <option value='left_l' selected>left_l</option>
	        <option value='right' >right</option>
	        <option value='top' >top</option>
	        <option value='down' >down</option>
	    </select> 
	    <label for='system'>System:</label>
	    <input type='text' name='system' value='$system'class="shelf-system">
        <input type='hidden' name='oldsnumber' value='$snumber' class="shelf-oldnumber">
        <input type='submit' value=' Submit' id="submit">
        <input type='reset' value=' Reset ' id ="reset">
        <input type='submit' value=' Cancel' id="cancel">
	</div>
</div>