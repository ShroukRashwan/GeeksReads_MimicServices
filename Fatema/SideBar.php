<?php
//$UserID = $_REQUEST["id"];

$myObj = new \stdClass();
$myObj->UserName = "Mahmoud Morsy";
$myObj->CountBooks = 94;
$myObj->photourl = "https://geeksreads.000webhostapp.com/LoggedInUser/PP.jpg";
$myObj->Followers = 4;
$myJSON = json_encode($myObj);

echo $myJSON;
?>