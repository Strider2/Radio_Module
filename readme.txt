Radio Module 1.0

This module will let you place Radio Stations on your site.

If you have installed my codeshare module all you have to do is import the update_strider.sql file

If not, please import the phpvms_strider and edit the RadioData.class.php file on line 64 and change the 4 to a 1.


To use this, you will need to get the Radio Station web player url.



Please use:
<?php $Radio = RadioData::get_radio();
if(!radio)
{
  echo '<span style="color:red;">No Radio Station Added added</span>';
}
else {
  foreach($Radio as $r)
  {
  echo '<iframe src="'.$r->url.'" frameborder="'.$r->frameborder.'"
    allowtransparency="'.$r->transparent.'" style="width: '.$r->width.'%; min-height: '.$r->height.'x; border: 0;"></iframe>';
  }
}
  ?>
That code for it to show on a page of your choice.


Released under the following license:
Creative Commons Attribution-Noncommercial-Share Alike 3.0 Unported License
