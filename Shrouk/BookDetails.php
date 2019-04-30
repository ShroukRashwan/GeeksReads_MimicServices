<?php

$BookID = $_GET["book_id"];

$myObj = new \stdClass();
$myObj->BookId = "111";
$myObj->Title = "Pride and Prejudice";
$myObj->Author = "Jane Austen";
$myObj->AuthorId = "22";
$myObj->bookId = 34;
$myObj->ratingcount = 2533019;
$myObj->textreviewscount = 56204;
$myObj->BookRating = 4.25;
$myObj->Description = "Since its immediate success in 1813, Pride and Prejudice has remained one of the most popular novels in the English language. Jane Austen called this brilliant work 'her own darling child'and its vivacious heroine, Elizabeth Bennet,'as delightful a creature as ever appeared in print.; The romantic clash between the opinionated Elizabeth and her proud beau, Mr. Darcy, is a splendid performance of civilized sparring. And Jane Austen's radiant wit sparkles as her characters dance a delicate quadrille of flirtation and intrigue, making this book the most superb comedy of manners of Regency England";
$myObj->Published= "28-1-1813";
$myObj->Publisher = "Modern Library";
$myObj->ISBN = 9780679783268;
$myObj->Pages = 279 ;
$myObj->ReadStatus = "" ;
$myObj->Cover = "http://geeksreads.000webhostapp.com/Shrouk/Cover.jpg";
$myJSON = json_encode($myObj);

echo $myJSON;
?>