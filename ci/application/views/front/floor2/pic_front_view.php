<div class= "zone pic ">
    <div class="top"> <h1>Second Floor (2nd)</h1></div>
    <div class="cep"></div>
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


</div>

</body>