<?php

$UserID = $_REQUEST["UserId"];

$myObj = new \stdClass();
$myObj->Followers  = 2;
$myObj->Following  = 2;
$myObj->CountBooks = 94;
$myObj->photourl = "http://geeksreads.000webhostapp.com/LoggedInUser/PP.jpg";
$myJSON = json_encode($myObj);

echo $myJSON;
?>