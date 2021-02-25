<?php

class Radio extends CodonModule
{
	public function index()
	{
		$this->set('copyright', RadioData::getVersion());
		$this->set('radio', RadioData::get_radio());
		$this->render('radio/Radio.php');
	}
	public function copyright()
	{
		$this->set('copyright', RadioData::getVersion());
		$this->render('radio/footer.php');
	}
}
