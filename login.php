<?php

//require('CAS.php');

// set your Alma Booking API Key
define("ALMA_SHELFLIST_API_KEY","l7xx5d5a73b36c5b415b92cd8a1406550647");

//$user = phpCAS::getUser();
/*echo $user;
var_dump(phpCAS::getAttributes());
*/

// JTM - Bypass login since IP restrictions are in place
$result = true;
// Can limit access to the application to only these succesfully authenticated users
// if ($user = "dlingley" || "subrama" || "bmeaghe2")
// {
//   $result=true;
// }


if($result != true){
	header("Location: noaccess.php");
	exit;
}
