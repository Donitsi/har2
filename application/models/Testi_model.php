<?php
class Testi_model extends CI_Model {


	public function getNimet(){
		$nimet=array(
			array("en"=>'Jussi',"sn"=>'Virta'),
			array("en"=>'Jussi',"sn"=>'Virtanen'),
			array("en"=>'Liisa',"sn"=>'Virta'),
			);
		return $nimet;
	}
}

