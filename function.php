<?php

function randCitation ($list) {
	
	if(empty($list) || !isset($list)){
		echo "Merci de mettre une liste valide !";
	}

	$list = @file_get_contents($list);
	$result = json_decode($list, true);
	$nova = @array_rand($result);
	
	echo$result[$nova];
}
