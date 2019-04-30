<?php

$string = $_REQUEST["Json"];
$json_in = json_decode($string, true);
$json_out = new \stdClass();

if ($json_in['UserEmail'] == "mahmoud_1@live.com")
{
    $json_out->ReturnMsg = "A verification email has been sent to mahmoud_1@live.com";
}
else if ($json_in['UserEmail'] == "mahmoud_2@live.com")
{
    $json_out->ReturnMsg = "User already registered";
}
else
{
    $json_out->ReturnMsg = "An Error Occurred";
}

$json_out = json_encode($json_out);

echo $json_out;
?>