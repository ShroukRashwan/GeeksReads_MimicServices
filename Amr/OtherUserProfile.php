<?php

//$UserID = $_REQUEST["FollowId"];

$myObj = new \stdClass();
//$json_in = json_decode($UserID, true);

$myObj->UserNameData  = "Amr Khaled";
$myObj->CountBooks = "5";
$myObj->photourl = "http://geeksreads.000webhostapp.com/Amr/MyPic.jpg";
$myObj->FollowStatus = "True";
    

http_response_code(200);
$myJSON = json_encode($myObj);

echo $myJSON;
?>