<?php

$this->show('Radio/radio_header.php');



echo '<h4>Radio Station URL: '.$Radio->url.'</h4><hr />';

echo 'Name: <b>'.$Radio->name.'</b><br />';

echo '</b><hr />';
echo '<a href="'.SITE_URL.'/admin/index.php/Twitch_admin/edit_radio?id='.$Radio->id.'"><b>Edit Station</b></a><br /><hr />';
echo '<a href="'.SITE_URL.'/admin/index.php/Twitch_admin/delete_radio?id='.$Radio->id.'"><span style="color:red;"><b>Delete Station</b></a> - This will delete the Radio Station from the database permanently!</span><br /><hr />';
?>
