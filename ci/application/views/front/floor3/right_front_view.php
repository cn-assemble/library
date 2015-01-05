<div class = "zone right">
    <?php foreach ($shelf as $item):?>
        <?php
        if($item['zone']=='right'&&$item['floor']==3){
            echo '<div class=" ';if($item['number']==$blink['number']) echo "blink ";
            echo 'i data-right">'.$item['number'].'</div>';
        }
        ?>
    <?php endforeach;?>


</div>