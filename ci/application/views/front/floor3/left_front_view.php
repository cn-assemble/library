<div class = "zone left">

    <?php foreach ($shelf as $item)

        if($item['zone']=='left'&&$item['floor']==3)
        {
            echo '<div class=" '; if($item['number']==$blink['number'])echo "blink ";
            echo'i data-left">'.$item['number'].'</div>';
        }

    ?>

</div>