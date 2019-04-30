<?php

$string = $_REQUEST["Json"];
$json_in = json_decode($string, true);
$json_out = new \stdClass();

if ($json_in['UserID'] == "iiiidddd1142019" && $json_in['UserToken'] == "xYzAbCdToKeN" && $json_in['UserPassword'] == "Mah1142019" && $json_in['NewPassword'] != 'Mah1142019')
{
     $json_out->ReturnMsg = "Your new password is saved successfully";
    
}
else if ($json_in['UserID'] == "iiiidddd1142019" && $json_in['UserToken'] == "xYzAbCdToKeN" && $json_in['UserPassword'] == "Mah1142019" && $json_in['NewPassword'] == 'Mah1142019')
{
     $json_out->ReturnMsg = "You cannot use the same password again";
    
}
else
{
    $json_out->ReturnMsg = "An Error Occurred";
}

$json_out = json_encode($json_out);

echo $json_out;
?>