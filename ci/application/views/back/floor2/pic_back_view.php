
<div class= "zone pic ">
    <div class="top"> <h1>Second Floor (2nd)</h1></div>
    <div class="cep">
		<div>
			<input type='submit' value='EDIT' id="edit" style="width:10em; height:5em; margin:3%; float:left;">
		</div>

		<div>
			<input type='submit' value='ADD' id ="add" style="width:10em; height:5em; margin:3%; float:left;">
		</div>

		<div>
			<input type='submit' value='DELETE' id ="delete" style="width:10em; height:5em; margin:3%; float:left;">

		</div>
        <div>
            <input type='submit' value=' REFRESH ' id ="refresh" style="width:10em; height:5em; margin:3%; float:left;">

        </div>
        
        <div class="shelf-form" style="float:left; margin:auto;">
	        <label for='number'>Shelf Number:</label>
	        <input type='text' name='number' value='$number' class="shelf-number"><br>
	         <label for='min'>Min:</label>
	        <input type='text' name='min' value='$min' class="shelf-min">
	        <label for='max'>Max:</label>
	        <input type='text' name='max' value='$max' class="shelf-max"><br>
	   
	        <label for='zone'>Zone:</label>
	        <select name='zone' class = "shelf-zone">
	            <option value='left_l' selected>left_l</option>
	            <option value='left_r' >left_r</option>
	            <option value='right' >right</option>
	            <option value='down' >down</option>
	        </select>
	        <label for='system'>System:</label>
	        <input type='text' name='system' value='$system' class="shelf-system">

            <input type='hidden' name='oldsnumber' value='$snumber' class="shelf-oldnumber">
            <input type='submit' value=' Submit' id="submit">
            <input type='reset' value=' Reset ' id ="reset">
            <input type='submit' value=' Cancel' id="cancel"><br>
	    </div>
	    <div class="shelf-form" style="float:left; margin:auto;">
    <br>Swap Shelf (Change book from Shelf A to B and B to A)<br>
<?php echo form_open('admin/swap_submit');
    $floor_of_form = 2; //edit when use in floor 3
?>
    <div>
        <label><strong>Shelf A Number</strong></label>
        <?php
        $data = array(
            'name'  => 'numberA',
            'id'    => 'numberA',
            'size'  => '5',
            'value' => '$number',
            'class' => 'shelf-number'
        );
        echo form_input($data);
        ?>

        <label><strong>Shelf A Floor</strong></label>
        <?php
        $data = array(
            'name'  => 'floorA',
            'id'    => 'floorA',
            'size'  => '5',
            'value' => $floor_of_form //repopulate <<Form validation
        );
        echo form_input($data);
        ?>
    </div>
    <div >
        <label><strong>Shelf B Number</strong></label>
        <?php
        $data = array(
            'name'  => 'numberB',
            'id'    => 'numberB',
            'size'  => '5',
            'value' => set_value('numberB') //repopulate <<Form validation
        );
        echo form_input($data);
        ?>

        <label><strong>Shelf B Floor</strong></label>
        <?php
        $data = array(
            'name'  => 'floorB',
            'id'    => 'floorB',
            'size'  => '5',
            'value' => set_value('floorB') //repopulate <<Form validation
        );
        echo form_input($data);

        $data = array(
            'value' => 'Swap!',
        );
        echo form_submit($data);
        ?>
    </div>
    <?=form_close();?>
</div>
</div>

    <div class = "down" style="">
        <?php foreach ($shelf as $item)
            if($item['zone']=='down'&&$item['floor']==2){
                echo '<div class="data data-down i d" min="'.$item['min'].'"
					max="'.$item['max'].'"
					floor="'.$item['floor'].'"
					zone="'.$item['zone'].'"
					system="'.$item['system'].'" >'.$item['number'].'</div>';
            }
        ?>
    </div>

</div>
</div>