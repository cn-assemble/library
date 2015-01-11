<div class = "zone down">
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

	
</body>