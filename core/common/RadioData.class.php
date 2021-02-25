<?php

class radioData extends CodonData
{
    public static function get_radio()
    {
		return DB::get_results("SELECT * FROM ".TABLE_PREFIX."radio");

    }
 	public static function get_upcoming_radio()
    {
        $query = "SELECT * FROM ".TABLE_PREFIX."radio
                ORDER BY id ASC";

        return DB::get_results($query);
    }
    public static function get_radios($id)
    {
        $query = "SELECT * FROM ".TABLE_PREFIX."radio WHERE id='$id'";

        return DB::get_row($query);
    }

   public static function get_past_radio()
    {
        $query = "SELECT * FROM ".TABLE_PREFIX."radio
                ORDER BY id DESC";

        return DB::get_results($query);
    }

    public static function save_new_radio($url, $border, $transparent, $width, $height, $name)
    {
      $query = "INSERT IGNORE INTO ".TABLE_PREFIX."radio (url, frameborder, transparent, width, height, name)
              VALUES ('$url', '$border', '$transparent', '$width', '$height', '$name')";

      DB::query($query);
    }
     public static function save_edit_radio($url, $border, $transparent, $width, $height, $name)
    {
        $query = "UPDATE ".TABLE_PREFIX."radio SET
         url='$url',
         frameborder='$border',
         transparent='$transparent',
         width='$width',
         height='$height',
         name='$name'
         WHERE id='$id'";

        DB::query($query);
    }
    public static function delete_radio($id)
    {
        $query = "DELETE FROM ".TABLE_PREFIX."radio
                    WHERE id='$id'";

        DB::query($query);
    }
       /////////////////////////////////
       // Do not remove this code!   //
       ///////////////////////////////
       public static function getVersion()
       {
        return DB::get_results("SELECT * FROM ".TABLE_PREFIX."strider WHERE id = 7");
       }
}
