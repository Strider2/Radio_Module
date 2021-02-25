<div class="content-header">
    <div class="header-section">
        <h1>
            <i class="gi gi-airplane"></i><Strong><?php echo SITE_NAME; ?> Radio</Strong><br><small> Community | <?php echo SITE_NAME?> &copy; <?php echo date("Y"); ?></small>
        </h1>
    </div>
</div>
<?php
if(!$radio)
    {
    	echo '<span style="color:red;">You have not added any Radio stations yet.</span>';
    }
    else {?>
      <?php

        foreach($radio as $r){


            ?>
<div class="row">
	<div class="col-md-12">
		<div class="block">
			<div class="block-title">
				<h3><?php echo $r->name;?></h3>

			</div>
      <!--https://radio.heavyhaulradio.online/public/hhr556/embed-->

			<iframe src="<?php echo $r->url;?>" frameborder="<?php echo $r->frameborder;?>"
        allowtransparency="<?php echo $r->transparent;?>" style="width: <?php echo $r->width;?>%; min-height: <?php echo $r->height;?>px; border: 0;"></iframe>
		</div>
	</div>
</div>
<br />
<?php
}
}
?>



<hr />
<?php
if(!$copyright){
echo '<span style="color:red;">Please put the strider table in your database as this is required.</span>';

}

else{
  foreach($copyright as $copy){
echo $copy->copyright .' '.date("Y").' '.$copy->name.' '.$copy->module.' '.$copy->version.'.';
}
}
 ?>
</div>

</div>
