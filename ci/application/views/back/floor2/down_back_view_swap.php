
<div class="shelf-form" style="clear: left;">
    <br>Swap Shelf (Change book from Shelf A to B and B to A)<br>
<?php echo form_open('admin/swap_submit');
    $floor_of_form = 2; //edit when use in floor 3
?>
    <div>
        <label><strong>Shelf A Number</strong></label>
        <?php
        $data = array(
            'name'  => 'numberA',
            'id'    => 'numberA',
            'size'  => '5',
            'value' => '$number',
            'class' => 'shelf-number'
        );
        echo form_input($data);
        ?>

        <label><strong>Shelf A Floor</strong></label>
        <?php
        $data = array(
            'name'  => 'floorA',
            'id'    => 'floorA',
            'size'  => '5',
            'value' => $floor_of_form //repopulate <<Form validation
        );
        echo form_input($data);
        ?>
    </div>
    <div >
        <label><strong>Shelf B Number</strong></label>
        <?php
        $data = array(
            'name'  => 'numberB',
            'id'    => 'numberB',
            'size'  => '5',
            'value' => set_value('numberB') //repopulate <<Form validation
        );
        echo form_input($data);
        ?>

        <label><strong>Shelf B Floor</strong></label>
        <?php
        $data = array(
            'name'  => 'floorB',
            'id'    => 'floorB',
            'size'  => '5',
            'value' => set_value('floorB') //repopulate <<Form validation
        );
        echo form_input($data);

        $data = array(
            'value' => 'Submit Post!',
        );
        echo form_submit($data);
        ?>
    </div>
    <?=form_close();?>
</div>
<br><br>

</body>