<div class = "zone right">
    <?php foreach ($shelf as $item)
		if($item['zone']=='right'&&$item['floor']==3){
			echo '<div class="data-right i r" min="'.$item['min'].'" 
					max="'.$item['max'].'" 
					floor="'.$item['floor'].'" 
					zone="'.$item['zone'].'" 
					system="'.$item['system'].'" >'.$item['number'].'</div>';
		}
	?>


</div>

</div>

</body>