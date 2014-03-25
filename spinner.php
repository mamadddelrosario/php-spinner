<?php
 function spinner($txt)
	{
		$test = preg_match_all("#\{(.*?)\}#", $txt, $out);
		if (!$test) return $txt;
		$toFind = Array();
		$toReplace = Array();

		foreach($out[0] AS $id => $match){
			$choices = explode("|", $out[1][$id]);
			$toFind[]=$match;
			$toReplace[]=trim($choices[rand(0, count($choices)-1)]);
		}
		return str_replace($toFind, $toReplace, $txt);
	}
?>
