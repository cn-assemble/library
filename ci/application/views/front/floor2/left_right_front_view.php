<div class = "zone left_in"  style="margin: 1%">
	<?php foreach ($shelf as $item)

			if($item['zone']=='left_r'&&$item['floor']==2)
				{
					echo '<div class=" '; if($item['number']==$blink['number'])echo "blink ";
					echo'data data-left">'.$item['number'].'</div>';
				}

	?>
	

	</div>

</div>