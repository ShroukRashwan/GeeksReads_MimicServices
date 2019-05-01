<?php

// To Read Data From Post Request Body like Backend
$json_in =  json_decode(file_get_contents('php://input'), true);

$json_out = new \stdClass();
// Mahmoud123456789 : (MD5) b98acc94be7ec5125c48158deeb8a59b
if ($json_in['token'] == "xYzAbCdToKeN" && $json_in['OldUserPassword'] == "b98acc94be7ec5125c48158deeb8a59b")
{
	header("HTTP/1.1 200");
    $json_out->ReturnMsg = "Update Successful";
}
// Mah1142020 : (MD5) 1b1733aa703dc489c0ed108f76578c0d
else if ($json_in['token'] == "xYzAbCdToKeN" && $json_in['OldUserPassword'] != "b98acc94be7ec5125c48158deeb8a59b")
{
	header("HTTP/1.1 400");
    $json_out->ReturnMsg = "Invalid Old password.";
}
else if ($json_in['token'] == "xYzAbCdToKeN_Wrong")
{
	header("HTTP/1.1 400");
    $json_out->ReturnMsg = "Invalid token.";
}
else if ($json_in['token'] == "xYzAbCdToKeN_NotExist")
{
	header("HTTP/1.1 400");
    $json_out->ReturnMsg = "User Doesn't Exist";
}
else
{
	header("HTTP/1.1 400");
    $json_out->ReturnMsg = "An Error Occurred";
}

$json_out = json_encode($json_out);

echo $json_out;
?>
