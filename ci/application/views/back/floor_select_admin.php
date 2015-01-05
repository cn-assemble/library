<html>
<head>
<link rel="stylesheet" href="/ci/public/css/pure.css">
<style type="text/css">
body{top:0;overflow:hidden;width:100%;height:100%;background: url("/ci/public/img/background.jpg") no-repeat;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover}
.bottom_manu{position: absolute;bottom: 0;font-size: 90%;min-width: 100%;background: #E6E6E6;opacity: 0.5;}
</style>
</head>
<body>

        <?=form_open('admin/select_floor');?>
        <fieldset style="margin-left: 31%; margin-top: 22%;position: fixed;">
        <legend></legend>
        
        <div class="pure-control-group">
        <label>Select Floor</label>
                <?php
                $options = array(
                  '2' => '2',
                  '3' => '3',
                  
                );

                    echo form_dropdown('floor', $options, '2');
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