





<div class = "zone down">

    <?php foreach ($shelf as $item):?>
        <?php
        if($item['zone']=='down'&&$item['floor']==3){
            echo '<div class=" '; if($item['number']==$blink['number']) echo "blink ";
            echo' i data-down">'.$item['number'].'</div>';
        }
        ?>
    <?php endforeach;?>




</div>

</div>
