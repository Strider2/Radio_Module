<?php


$this->show('Radio/radio_header.php');

?>


<h4>Edit Station</h4>
<hr />
<form name="eventform" action="<?php echo SITE_URL; ?>/admin/index.php/Radio_admin" method="post" >
<table width="80%">

            <tr>
                <td>Url</td>
                <td>
                  <input type="text" name="url"
                  <?php echo 'value="'.$Radio->url.'"';?>/></td>

            </tr>
            <tr>
                <td>Frame Border</td>
                <td>
                  <input type="text" name="border"
                  <?php echo 'value="'.$Radio->frameborder.'"';?>/></td>

            </tr>
            <tr>
                <td>Transparency</td>
                <td>
                  <input type="text" name="transparent"
                  <?php echo 'value="'.$Radio->transparent.'"';?>/></td>

            </tr>
            <tr>
                <td>Width</td>
                <td><input type="text"  name="width"
                           <?php echo 'value="'.$Radio->width.'"'; ?>
                           /></td>
            </tr>
                              <tr>
                                  <td>Height</td>
                                  <td><input type="text" name="height"
                                              <?php

                                                    echo 'value="'.$Radio->height.'"';
                                                  ?>/></td>
                                                </tr>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name"
                           <?php echo 'value="'.$Radio->name.'"'; ?>
                          /></td>
            </tr>

            <tr>
                <td colspan="2">
                    <input type="hidden" name="id" value="<?php echo $Radio->id; ?>" />
                    <input type="hidden" name="action" value="save_edit_radio" />
                    <input type="submit" value="Edit Radio Station"></td>
            </tr>

    </table>     </form>
