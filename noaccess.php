<?php
//require('CAS.php');

echo $user . " ";

// logout if desired
if (isset($_REQUEST['logout'])) {
phpCAS::logout(['url' =>  'https://alma.wludci.info/inventory/index.php']);
}
?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>
<a href="?logout=">Logout</a><BR>
You do not have access to this application.  
</body>
</html>
