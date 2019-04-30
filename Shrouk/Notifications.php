<?php

$UserID = $_REQUEST["id"];

$notification1 = new \stdClass();
$notification1->body = "John Starting following you.";
$notification1->seen = false;
$notification1->the = "Mar,28 2019";

$notification2 = new \stdClass();
$notification2->body = "Rachel Starting following you.";
$notification2->seen = true;
$notification2->the = "Mar,20 2019";

$notification3 = new \stdClass();
$notification3->body = "Shrouk Starting following you.";
$notification3->seen = true;
$notification3->the = "Mar,18 2019";

$myArr = array($notification1, $notification2, $notification3);
$myJSON = json_encode($myArr);

echo $myJSON;
?>