<?php

//$UserID = $_REQUEST["id"];

$Book1 = new \stdClass();
$Book1->ISBN = "111";
$Book1->Title = "Pride and Prejudice";
$Book1->Author = "Jane Austen";
$Book1->ratingcount = 2533019;
$Book1->BookRating = 4.25;
$Book1->Published= "28-1-1813";
$Book1->Publisher = "Modern Library";
$Book1->Pages = 279 ;
$Book1->Cover = "http://geeksreads.000webhostapp.com/Shrouk/Cover.jpg";

$Book2 = new \stdClass();
$Book2->ISBN = "222";
$Book2->Title = "Pride and Prejudice";
$Book2->Author = "Jane Austen";
$Book2->ratingcount = 2533019;
$Book2->BookRating = 4.25;
$Book2->Published= "28-1-1813";
$Book2->Publisher = "Modern Library";
$Book2->Pages = 279 ;
$Book2->Cover = "http://geeksreads.000webhostapp.com/Shrouk/Cover.jpg";

$Book3 = new \stdClass();
$Book3->ISBN = "333";
$Book3->Title = "Pride and Prejudice";
$Book3->Author = "Jane Austen";
$Book3->ratingcount = 2533019;
$Book3->BookRating = 4.25;
$Book3->Published= "28-1-1813";
$Book3->Publisher = "Modern Library";
$Book3->Pages = 279 ;
$Book3->Cover = "http://geeksreads.000webhostapp.com/Shrouk/Cover.jpg";

$Book4 = new \stdClass();
$Book4->ISBN = "444";
$Book4->Title = "Pride and Prejudice";
$Book4->Author = "Jane Austen";
$Book4->ratingcount = 2533019;
$Book4->BookRating = 4.25;
$Book4->Published= "28-1-1813";
$Book4->Publisher = "Modern Library";
$Book4->Pages = 279 ;
$Book4->Cover = "http://geeksreads.000webhostapp.com/Shrouk/Cover.jpg";

$Book5 = new \stdClass();
$Book5->ISBN = "555";
$Book5->Title = "Pride and Prejudice";
$Book5->Author = "Jane Austen";
$Book5->ratingcount = 2533019;
$Book5->BookRating = 4.25;
$Book5->Published= "28-1-1813";
$Book5->Publisher = "Modern Library";
$Book5->Pages = 279 ;
$Book5->Cover = "http://geeksreads.000webhostapp.com/Shrouk/Cover.jpg";

$myArr = array($Book1, $Book2, $Book3, $Book4, $Book5);
$myJSON = json_encode($myArr);

echo $myJSON;
?>