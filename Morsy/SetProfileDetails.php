<?php

$string = $_REQUEST["Json"];
$json_in = json_decode($string, true);
$json_out = new \stdClass();

if ($json_in['UserID'] == "iiiidddd1142019" && $json_in['UserToken'] == "xYzAbCdToKeN" && $json_in['EmailAddress'] == "mahmoud_morsy@live.com")
{
     $json_out->ReturnMsg = "Your changes are saved successfully";
    
}
else if ($json_in['UserID'] == "iiiidddd1142019" && $json_in['UserToken'] == "xYzAbCdToKeN")
{
   $json_out->ReturnMsg = "A verification email has been sent to mahmoud_morsy@live.com";

}
else
{
    $json_out->ReturnMsg = "An Error Occurred";
}

$json_out = json_encode($json_out);

echo $json_out;
?>