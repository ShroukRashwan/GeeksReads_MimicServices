<?php

$json_in =  json_decode(file_get_contents('php://input'), true);
$returnJSON = "";

if ($json_in['token'] == "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJfaWQiOiI1Y2M1ZGY4YzJlOWM1ODAwMTcyODY0YzkiLCJpYXQiOjE1NTY3MDYwNTAsImV4cCI6MTU1Njc5MjQ1MH0.VKbXK2bzzVPrW-KAhUFkW8D-R6PbG-pOtazrcUne5K4")
{
	header("HTTP/1.1 200");
	
	$Book1 = new \stdClass();
	$Book1->BookId = "111";
	$Book1->ISBN = "111";
	$Book1->Title = "Pride and Prejudice";
	$Book1->Author = "Jane Austen";
	$Book1->AuthorId = "111";
	$Book1->ratingcount = 2533019;
	$Book1->BookRating = 4.25;
	$Book1->Published= "28-1-1813";
	$Book1->Publisher = "Modern Library";
	$Book1->Pages = 279 ;
	$Book1->Cover = "http://geeksreads.000webhostapp.com/Shrouk/Cover.jpg";

	$Book2 = new \stdClass();
	$Book2->ISBN = "222";
	$Book2->BookId = "222";
	$Book2->Title = "فلتغفري";
	$Book2->Author = "أثير عبدالله النشمي";
	$Book2->AuthorId = "111";
	$Book2->ratingcount =  27524;
	$Book2->BookRating = 3.47;
	$Book2->Published= "1-1-2013";
	$Book2->Publisher = "دار الفارابي للنشر والتوزيع";
	$Book2->Pages = 235 ;
	$Book2->Cover = "http://geeksreads.000webhostapp.com/Shrouk/Cover1.jpg";

	$Book3 = new \stdClass();
	$Book3->ISBN = "333";
	$Book3->BookId = "222";
	$Book3->Title = "Macbeth";
	$Book3->Author = "William Shakespeare";
	$Book3->AuthorId = "111";
	$Book3->ratingcount =595899;
	$Book3->BookRating = 3.89;
	$Book3->Published= "1-7-1606";
	$Book3->Publisher = "Simon Schuster";
	$Book3->Pages = 246 ;
	$Book3->Cover = "http://geeksreads.000webhostapp.com/Shrouk/Cover2.jpg";

	$Book4 = new \stdClass();
	$Book4->ISBN = "444";
	$Book4->BookId = "444";
	$Book4->Title = "Twilight";
	$Book4->Author = "Stephenie Meyer";
	$Book4->AuthorId = "111";
	$Book4->ratingcount =  4403698;
	$Book4->BookRating = 3.58;
	$Book4->Published= "6-9-2005";
	$Book4->Publisher = "Little, Brown and Company ";
	$Book4->Pages = 498 ;
	$Book4->Cover = "http://geeksreads.000webhostapp.com/Shrouk/Cover4.jpg";

	$Book5 = new \stdClass();
	$Book5->ISBN = "555";
	$Book5->BookId = "555";
	$Book5->Title = "Harry Potter and the Sorcerer's Stone";
	$Book5->Author = " J.K. Rowling";
	$Book5->AuthorId = "111";
	$Book5->ratingcount =  5883417;
	$Book5->BookRating = 4.47;
	$Book5->Published= "26-6-1997";
	$Book5->Publisher = "Scholastic Inc";
	$Book5->Pages = 320 ;
	$Book5->Cover = "http://geeksreads.000webhostapp.com/Shrouk/Cover3.jpg";

	$myArr = array($Book1, $Book2, $Book3, $Book4, $Book5);
	
	$returnObj= new \stdClass();
	$arrJSON = json_encode($myArr);
	$returnObj->ReadData = $arrJSON;
	$returnJSON = json_encode($returnObj);
}
else if ($json_in['token'] == null )
{
	header("HTTP/1.1 401");
	$returnObj = new \stdClass();
    $returnObj->ReturnMsg = "Access denied. No token provided.";
	$returnJSON = json_encode($returnObj);
}
else
{
	header("HTTP/1.1 400");
	$returnObj = new \stdClass();
    $returnObj->ReturnMsg = "Invalid token.";
	$returnJSON = json_encode($returnObj);
}

echo $returnJSON;
?>
