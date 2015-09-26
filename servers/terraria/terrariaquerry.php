<?php

	class query{

		public function get_status($cmd){

			$ip = "www.gnosisparadox.net";
                        $port = "7778";
                        $token = "EB8F869F77891DD48D6205FB6C6500922C05DC8EE544E8DAAFE987A2A0822B1C";
                        $json = file_get_contents("http://".$ip.":".$port.$cmd."?token=".$token);
                        $data = json_decode($json, TRUE);

			if ($data['status'] == 200){
				return true;
			}
			else if ($data['status'] != 200){
				return false;
			}
		}
	}
?>
