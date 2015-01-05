<div class = "zone left">

    <?php foreach ($shelf as $item)

        if($item['zone']=='left'&&$item['floor']==3)
        {
            echo '<div  class="data-left i ll" min="'.$item['min'].'" 
					max="'.$item['max'].'" 
					floor="'.$item['floor'].'" 
					zone="'.$item['zone'].'" 
					system="'.$item['system'].'" >'.$item['number'].'</div>';
        }

    ?>

</div>