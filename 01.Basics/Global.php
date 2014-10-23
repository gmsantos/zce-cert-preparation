<?php

$matrix = [
	[
		'name' => 'John',
		'surname' => 'Smith'
	],
	[
		'name' => 'James',
		'surname' => 'Smith'
	],
	[
		'name' => 'Jonathan',
		'surname' => 'Smith'
	],
];

function printUser($id){
	global $matrix;
	
	foreach ($matrix as $key => $user){
		if($id == $key)				// Watch the brackets moron!
			echo $user['name'];
			echo $user['surname'];
	}
}

printUser(00);