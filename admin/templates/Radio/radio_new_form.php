<?php

$this->show('Radio/radio_header.php');
if(isset($Radio))
{echo '<div id="error">All fields must be filled out</div>'; }
?>

<h4>Radio Station</h4>
<span style="color:red;">Note: All fields must be filled in.</span>
<table width="80%">
  <form name="eventform" action="<?php echo SITE_URL; ?>/admin/index.php/Radio_admin" method="post">
  <table width="100%" class="tablesorter">
  <tr>
    <td valign="top"><strong>Url: </strong></td>
    <td>
      <input type="text" name="url"
      <?php
      if(isset($event))
      {
        echo 'value="'.$event['url'].'"';
      } ?>/>
      <p><span style="color:red;">Please enter the address of the radio station player.</span></p>
    </td>
  </tr>
  <tr>
    <td align="top"><strong>Border: </strong></td>
    <td>
      <input type="text" name="border"
      <?php if(isset($event))
      {
        echo 'value"'.$event['border'].'"';
      } ?>/>

    </td>
  </tr>
  <tr>
    <td align="top"><strong>Transparency: </strong></td>
    <td>
      <input type="text" name="transparent"
      <?php
      if(isset($event))
      {
        echo 'value="'.$event['transparent'].'"';
      } ?>/>
      <p><span style="color:red;">You can choose either true or false</span></p>
    </td>
  </tr>
  <tr>
    <td><strong>Width:</strong></td>
    <td>
      <input type="text" name="width"
      <?php
      if(isset($event))
      {
          echo 'value="'.$event['width'].'"';
      }
       ?>/>
       <p><span style="color:red;">Enter number from 1 to 100.</span></p>

    </td>
  </tr>
  <tr>
    <td width="3%" nowrap><strong>Height:</strong></td>
    <td><input  name="height"
        <?php
        if(isset($event))
        {
          echo 'value="'.$event['height'].'"';
        }
        ?>/>
    </td>
  </tr>
  <tr>
    <td><strong>Name:</strong></td>
    <td><input name="name"
      <?php
        if(isset($event))
        {
          echo 'value="'.$event['name'].'"';
        }
       ?>/>
    </td>
  </tr>
  <tr>
    <td></td>
    <td><input type="hidden" name="action" value="<?php echo $action;?>" />
      <input type="hidden" name="id" value="<?php echo $Radio->id;?>" />
      <input type="submit" name="submit" value="<?php echo $title;?>" />
    </td>
  </tr>
  </table>
  </form>
  </div>
