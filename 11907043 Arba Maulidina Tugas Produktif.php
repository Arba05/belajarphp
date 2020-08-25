<?php 
	class handphone
	{
		public $merk;

		public function hidupkan()
		{
			return 'Hidupkan handphone '.$this->merk;
 		}
	}

	$handphone1 = new handphone();
	$handphone1->merk = 'samsung';
	echo $handphone1->hidupkan();
 ?>