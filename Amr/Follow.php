<?php

$UserID = $_REQUEST["myuserId"];
//$FID = $_REQUEST["userId_tobefollowed"];

$json_in = json_decode($UserID, true);

$myObj = new \stdClass();

if ($json_in['myuserId'] == "1152003")
{
    
$myObj->Follow = "true";
    
    
}else{
    
$myObj->Follow = "false";
    
}

$myJSON = json_encode($myObj);

echo $myJSON;
?>