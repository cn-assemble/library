<html>
<head>
<link rel="stylesheet" href="/ci/public/css/pure.css">
<style type="text/css">
body{top:0;overflow:hidden;width:100%;height:100%;background: url("/ci/public/img/background.jpg") no-repeat;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover}
.bottom_manu{position: absolute;bottom: 0;font-size: 90%;min-width: 100%;background: #E6E6E6;opacity: 0.5;}
</style>
</head>
<body>
<h1 style="color: red;" ><?php echo validation_errors(); $attributes = array('class' => 'pure-form pure-form-aligned'); ?></h1>
        <?=form_open('welcome/form_submit',$attributes);?>
        <fieldset style="margin-left: 31%; margin-top: 22%;position: fixed;">
        <legend>Searching Shelf of Book</legend>
        <div class="pure-control-group">
        <label for="snumber">Call Reference</label>

        <?php
                $data = array(
                    'name'  => 'callno',
                    'id'    => 'call',
                    'placeholder' => 'Call No.',
                    'class' => 'callno'
                );
                echo form_input($data);
                ?>
        </div>
        <div class="pure-control-group">
        <label for="booktype">Language of Book</label>
            <?php
                $option = array(
                    'ENG'  => 'English',
                    'TH'    => 'Thai',                                      
                );
                $js = ' class="drop" ';
                echo form_dropdown('lang',$option,'ENG',$js);
                ?> 
        </div>
        <div class="pure-control" style="margin-left:35%">
        <?php
                $data = array(
                    'value' => 'Submit',
                    'class' => 'submit pure-button pure-button-primary'
                );
                echo form_submit($data);
                ?>
        </div>
    </fieldset>
<?=form_close();?>
<div class="bottom_manu pure-menu pure-menu-open pure-menu-horizontal">
    <ul>
        <li><a href="/ci/">Home</a></li>
        <li><a href="http://koha.library.tu.ac.th/" target="_blank">TU Libraries</a></li>
    </ul>
</div>

</body>
</html>