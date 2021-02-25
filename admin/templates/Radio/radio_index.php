<?php
$this->show('Radio/radio_header.php');

echo 'Click On Station details for editing the Stream or viewing the username and parent.<hr />';

echo '<h4>Streams</h4><hr />';
    if(!$Radio)
    {
     echo 'No stations found';

    }
    else
    {

    foreach($Radio as $r)
    {
         echo '<h3>'.$r->name.'</h3>';
         echo '<p><iframe src="'.$r->url.'" frameborder="'.$r->frameborder.'"
           allowtransparency="'.$r->transparent.'" style="width: '.$r->width.'%; min-height: '.$r->height.'x; border: 0;"></iframe></p>';
         echo '<p><a href="'.SITE_URL.'/admin/index.php/Radio_admin/get_radio?id='.$r->id.'">Station Details</a></p><br />';
  }

    }

?>
