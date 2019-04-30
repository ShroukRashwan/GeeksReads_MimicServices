<?php

$arr = array(
    array(
        "ReviewID" => "1152003",
        "username" => "Great Book!",
        "photourl" => "http://geeksreads.000webhostapp.com/Shrouk/Cover.jpg",
        "UserPicLink" => "http://geeksreads.000webhostapp.com/Fatema/userPic.jpg",
        "body" => "Since its immediate success in 1813, Pride and Prejudice has remained one of the most popular novels in the English language. Jane Austen called this brilliant work 'her own darling child'and its vivacious heroine, Elizabeth Bennet,'as delightful a creature as ever appeared in print.; The romantic clash between the opinionated Elizabeth and her proud beau, Mr. Darcy, is a splendid performance of civilized sparring. And Jane Austen's radiant wit sparkles as her characters dance a delicate quadrille of flirtation and intrigue, making this book the most superb comedy of manners of Regency England",
        "likes" => "5",
        "NumberComments" => "10",
        "UserWhoWroteID" => "1152003"
    ),
    array(
         "ReviewID" => "1142019",
        "username" => "Really Liked It!",
        "photourl" => "http://geeksreads.000webhostapp.com/Shrouk/Cover.jpg",
         "UserPicLink" => "http://geeksreads.000webhostapp.com/Amr/MyPic.jpg",
         "body" => "Since its immediate success in 1813, Pride and Prejudice has remained one of the most popular novels in the English language. Jane Austen called this brilliant work 'her own darling child'and its vivacious heroine, Elizabeth Bennet,'as delightful a creature as ever appeared in print.; The romantic clash between the opinionated Elizabeth and her proud beau, Mr. Darcy, is a splendid performance of civilized sparring. And Jane Austen's radiant wit sparkles as her characters dance a delicate quadrille of flirtation and intrigue, making this book the most superb comedy of manners of Regency England",
        "likes" => "15",
        "NumberComments" => "20",
        "UserWhoWroteID" => "1142019"
    )
);

http_response_code(200);
$myJSON = json_encode($arr);

echo $myJSON;
?>