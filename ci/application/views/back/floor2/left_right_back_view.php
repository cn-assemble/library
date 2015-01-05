<div class = "zone left_in">
	<?php foreach ($shelf as $item)
		if($item['zone']=='left_r'&&$item['floor']==2){
			echo '<div class="data data-left i lr" min="'.$item['min'].'" 
					max="'.$item['max'].'" 
					floor="'.$item['floor'].'" 
					zone="'.$item['zone'].'" 
					system="'.$item['system'].'" >'.$item['number'].'</div>';
		}
	?>
	</div>

</div>