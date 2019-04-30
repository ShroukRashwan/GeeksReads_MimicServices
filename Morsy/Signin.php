<?php

$string = $_REQUEST["Json"];
$json_in = json_decode($string, true);
$json_out = new \stdClass();

if ($json_in['UserEmail'] == "mahmoud_1@live.com")
{
    $json_out->ReturnMsg = "Your account has not been verified.";
}
else if ($json_in['UserEmail'] == "mahmoud_2@live.com" && $json_in['UserPassword'] != "Mah1142019")
{
    $json_out->ReturnMsg = "Invalid email or password.";
}
else if ($json_in['UserEmail'] == "mahmoud_morsy@live.com" && $json_in['UserPassword'] == "Mahmoud123456789")
{
    $json_out->ReturnMsg = "Login Succeeded";
    $json_out->ReturnToken = "xYzAbCdToKeN";
    $json_out->UserID = "iiiidddd1142019";
}
else
{
    $json_out->ReturnMsg = "An Error Occurred";
}

$json_out = json_encode($json_out);

echo $json_out;
?>