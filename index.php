<?php

// @include_once('helpers.php');
@include_once('year.php');
@include_once('variables.php');


if(!function_exists('welcome'))
{
	function welcome ($name)
	{
		echo "Welcome $name to the site";
		echo 'Welcome $name to the site';
		echo'Welcome '.$name.' to the site';    //skirtumas tarp komandu
	}
}
Welcome('Jevgenij');
echo "\n";
echo $year;

?>
