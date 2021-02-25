<?php


class Radio_admin extends CodonModule
{
    public function HTMLHead()
    {
        $this->set('sidebar', 'Radio/sidebar_radio.php');
    }

    public function NavBar()
    {
        echo '<li><a href="'.SITE_URL.'/admin/index.php/Radio_admin">Radio</a></li>';
    }

    public function index()
    {
        if($this->post->action == 'save_new_radio')
        {
            $this->save_new_radio();
        }
        elseif($this->post->action == 'save_edit_radio')
        {
            $this->save_edit_radio();
        }
        else
        {
            $this->set('Twitch', RadioData::get_radio());
			      $this->set('history', RadioData::get_past_radio());
            $this->set('copyright', RadioData::getVersion());
            $this->show('Radio/radio_index.php');
        }
    }
    public function get_radio()
    {
        $id = $_GET[id];
        $this->set('Radio', RadioData::get_radios($id));
        $this->set('copyright', RadioData::getVersion());
        $this->show('Radio/radio_details.php');
    }
    public function new_radio()
    {
        $Radio = RadioData::get_radio();
        $this->set('copyright', RadioData::getVersion());
        $this->set('title', 'Add Station');
        $this->set('action', 'save_new_radio');
        $this->set('Radio', $Radio);


        $this->show('Radio/radio_new_form.php');
        /*$this->set('codeshares', $codeshares);
        $this->show('codeshare/codeshare_new_form.php');*/
    }
    protected function save_new_radio()
    {
      $Radio = array();

      $Radio['url'] = DB::escape($this->post->url);
      $Radio['frameborder'] = DB::escape($this->post->border);
      $Radio['transparent'] = DB::escape($this->post->transparent);
      $Radio['width'] = DB::escape($this->post->width);
      $Radio['height'] = DB::escape($this->post->height);
      $Radio['name'] = DB::escape($this->post->name);



      /*foreach($Radio as $test)
      {
          if(empty($test))
          {
              $this->set('spotify', $Radio);
              $this->show('youtube/spotify_new_form.php');
              return;
          }
      }*/


      # Add it in
      RadioData::save_new_radio($Radio['url'], $Radio['frameborder'],
                            $Radio['transparent'],
                            $Radio['width'],
                            $Radio['height'],
                            $Radio['name']);


      $this->set('message', 'The station "' . $this->post->name .'" has been added');
      $this->render('core_success.php');
      $this->set('Radio', RadioData::get_radio());
      $this->show('Radio/radio_index');
      LogData::addLog(Auth::$userinfo->pilotid, 'Added Radio Station "' . $this->post->name . '"');
    }
    public function edit_radio() {
            $id = $_GET[id];
            $Radio = array();
            $Radio = RadioData::get_radios($id);
            $this->set('copyright', RadioData::getVersion());
            $this->set('Radio', $Radio);
            $this->show('Radio/radio_edit_form.php');
    }
    protected function save_edit_radio()
    {
      $Radio = array();

      $Radio['url'] = DB::escape($this->post->url);
      $Radio['frameborder'] = DB::escape($this->post->border);
      $Radio['transparent'] = DB::escape($this->post->transparent);
      $Radio['width'] = DB::escape($this->post->width);
      $Radio['height'] = DB::escape($this->post->height);
      $Radio['name'] = DB::escape($this->post->name);


        $ret=RadioData::save_edit_radio($Radio['url'], $Radio['frameborder'],
                              $Radio['transparent'],
                              $Radio['width'],
                              $Radio['height'],
                              $Radio['name']);

        if (DB::errno() != 0 && $ret == false) {
            $this->set('message',
                       'There was an error adding the Radio Station,
                       already exists DB error: ' . DB::error());
            $this->render('core_error.php');
            return;
        }

        $this->set('message', 'The Radio Station "' . $this->post->name .
                   '" has been edited');
        $this->render('core_success.php');

        LogData::addLog(Auth::$userinfo->pilotid, 'Edited the Radio Station "' . $this->post->name . '"');

        $id = $Radio['id'];
        $this->set('Twitch', RadioData::get_radios($id));

        $this->show('Radio/radio_details.php');
    }

    public function delete_radio()
    {
        $id = $_GET[id];
        RadioData::delete_radio($id);
        LogData::addLog(Auth::$userinfo->pilotid, 'Deleted Radio Station "' . $this->post->name . '"');
        $this->set('Twitch', RadioData::get_upcoming_radio());
        $this->show('Radio/radio_index.php');
    }
}
