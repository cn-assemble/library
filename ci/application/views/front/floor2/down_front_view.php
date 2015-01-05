<div class = "down">

	<?php foreach ($shelf as $item):?> 
		<?php
			if($item['zone']=='down'&&$item['floor']==2){
			echo '<div class=" '; if($item['number']==$blink['number']) echo "blink ";
			echo'data data-down">'.$item['number'].'</div>';
		}
		?>
	<?php endforeach;?>

				
				
		</div>

	</div>

</body>