<?php

function randCitation ($list) {
	
	if(empty($list) || !isset($list)){
		echo "Merci de mettre une liste valide !";
	}

	$quotes = @file_get_contents($list); // Get JSON data
	$result = json_decode($quotes, true); // Decoding JSON

	$key = @array_rand($result); // Get a random key

	echo '<p>' . $result[$key]["quote"] . '</p><footer class="blockquote-footer">' . $result[$key]["author"] . '</footer>';

}

?>
