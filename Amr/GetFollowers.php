<?php

$UserID = $_REQUEST["UserId"];

$arr = array(
    array(
        "id" => "1152003",
        "name" => "Amr",
        "photourl" => "http://geeksreads.000webhostapp.com/Amr/MyPic.jpg"
    ),
    array(
         "id" => "1142019",
        "name" => "Fatema",
        "photourl" => "http://geeksreads.000webhostapp.com/Fatema/userPic.jpg"
    )
);

//http_response_code(200);
$myJSON = json_encode($arr);

echo $myJSON;
?>