<?php


function connection(){
	$dbname = (getenv('hrsmartid') == 'impact' ? 'clarityvms' : getenv('hrsmartid'));
	//$dbname = "clarityvms";
	$dbhost = "localhost";

	$link = mysqli_connect($dbhost,$dbname,$dbname) or die('false');
	if($link)
		mysqli_select_db($link,$dbname) or die('false');

	return $link;
}
