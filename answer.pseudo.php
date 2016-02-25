<?php

//Method to generate random number with input name
function randomNumGenerator($name)
{
	$randomnumber = rand(6,15);

	//Check whether the name is provided
	if(!empty($name)){
		$output = "$name $randomnumber";
	}
	else {
		$output = 'Please input a name';
	}
	return $output;

}

?>