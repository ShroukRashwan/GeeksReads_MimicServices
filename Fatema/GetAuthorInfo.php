<?php
$UserID = $_REQUEST["UserId"];
$myObj = new \stdClass();

$myObj->name="Jane Austen";
$myObj->rate="4.6";
$myObj->numofrates="120,000";
$myObj->numofreviews="72,562";
$myObj->numofbooks="274";
$myObj->followed="true";
$myObj->disc="Jane Austen was an English novelist whose works of romantic fiction, set among the landed gentry, earned her a place as one of the most widely read writers in English literature, her realism and biting social commentary cementing her historical importance among scholars and critics.

Austen lived her entire life as part of a close-knit family located on the lower fringes of the English landed gentry. She was educated primarily by her father and older brothers as well as through her own reading. The steadfast support of her family was critical to her development as a professional writer. Her artistic apprenticeship lasted from her teenage years until she was about 35 years old. During this period, she experimented with various literary forms, including the epistolary novel which she tried then abandoned, and wrote and extensively revised three major novels and began a fourth. From 1811 until 1816, with the release of Sense and Sensibility (1811), Pride and Prejudice (1813), Mansfield Park (1814) and Emma (1815), she achieved success as a published writer. She wrote two additional novels, Northanger Abbey and Persuasion, both published posthumously in 1818, and began a third, which was eventually titled Sanditon, but died before completing it.

Austen's works critique the novels of sensibility of the second half of the 18th century and are part of the transition to 19th-century realism. Her plots, though fundamentally comic, highlight the dependence of women on marriage to secure social standing and economic security. Her work brought her little personal fame and only a few positive reviews during her lifetime, but the publication in 1869 of her nephew's A Memoir of Jane Austen introduced her to a wider public, and by the 1940s she had become widely accepted in academia as a great English writer. The second half of the 20th century saw a proliferation of Austen scholarship and the emergence of a Janeite fan culture.";
$myObj->authorpicurl="http://geeksreads.000webhostapp.com/Fatema/janeausten.jpg";
$myObj->authorbooks=array(
    array(
        "id"=>"1",
        "name"=>"Pride and Prejudice",
         "author"=>$myObj->name,
        "bookrate"=>"4.9",
       
        "numofrates"=>"300,000",
        "discription"=>"Since its immediate success in 1813, Pride and Prejudice has remained one of the most popular novels in the English language. Jane Austen called this brilliant work 'her own darling child' and its vivacious heroine, Elizabeth Bennet, 'as delightful a creature as ever appeared in print.' The romantic clash between the opinionated Elizabeth and her proud beau, Mr. Darcy, is a splendid performance of civilized sparring. And Jane Austen's radiant wit sparkles as her characters dance a delicate quadrille of flirtation and intrigue, making this book the most superb comedy of manners of Regency England.",
     
        "readingstatus"=>"Read",
        "coverurl"=> "http://geeksreads.000webhostapp.com/Fatema/prideandprejudice.jpg"
        ),
    array(
         "id"=>"2",
        "name"=>"Sense and Sensibility",
         "author"=>$myObj->name,
        "bookrate"=>"4.6",
        "numofrates"=>"120,000",
         "discription"=>"The more I know of the world, the more am I convinced that I shall never see a man whom I can really love. I require so much!'

Marianne Dashwood wears her heart on her sleeve, and when she falls in love with the dashing but unsuitable John Willoughby she ignores her sister Elinor's warning that her impulsive behaviour leaves her open to gossip and innuendo. Meanwhile Elinor, always sensitive to social convention, is struggling to conceal her own romantic disappointment, even from those closest to her. Through their parallel experience of love—and its threatened loss—the sisters learn that sense must mix with sensibility if they are to find personal happiness in a society where status and money govern the rules of love.",
        "readingstatus"=>"Currently Reading",
        "coverurl"=> "http://geeksreads.000webhostapp.com/Fatema/senseandsensibility.jpg"
        ),
        array(
         "id"=>"3",
        "name"=>"Lady Susan",
         "author"=>$myObj->name,
        "bookrate"=>"3.9",
        "numofrates"=>"260,000",
         "discription"=>"Beautiful, flirtatious, and recently widowed, Lady Susan Vernon seeks an advantageous second marriage for herself, while attempting to push her daughter into a dismal match. A magnificently crafted novel of Regency manners and mores that will delight Austen enthusiasts with its wit and elegant expression.",
         "readingstatus"=>"None",
        "coverurl"=> "http://geeksreads.000webhostapp.com/Fatema/ladysusan.jpg"
        ),
        array(
         "id"=>"4",
        "name"=>"Mansfield Park",
         "author"=>$myObj->name,
        "bookrate"=>"4.1",
        "numofrates"=>"130,000",
         "discription"=>"'We have all been more or less to blame ... every one of us, excepting Fanny' Taken from the poverty of her parents' home, Fanny Price is brought up with her rich cousins at Mansfield Park, acutely aware of her humble rank and with only her cousin Edmund as an ally. When Fanny's uncle is absent in Antigua, Mary Crawford and her brother Henry arrive in the neighbourhood, bringing with them London glamour and a reckless taste for flirtation. As her female cousins vie for Henry's attention, and even Edmund falls for Mary's dazzling charms, only Fanny remains doubtful about the Crawfords' influence and finds herself more isolated than ever. A subtle examination of social position and moral integrity, Mansfield Park is one of Jane Austen's most profound works.",
         "readingstatus"=>"None",
        "coverurl"=> "http://geeksreads.000webhostapp.com/Fatema/mansfieldpark.jpg"
        ),
        array(
         "id"=>"5",
        "name"=>"The Watsons",
         "author"=>$myObj->name,
        "bookrate"=>"4.2",
        "numofrates"=>"10,000",
         "discription"=>"Left impoverished upon the death of her aunt, Emma Watson has no option but to be reunited with her estranged father and siblings. Initially delighted with her new life—including the fashionable society balls to which she now has access—Emma soon realizes that her family harbors many ill feelings, not least those springing from the sisters' hopes—and disappointments—in snaring a husband. So when the eligible and suitably rich Tom Musgrove begins to transfer his affections from her sister Margaret to Emma, the result can only be further sibling rivalry and unrest. A delightful, exquisitely drawn portrait of family life, The Watsons is Jane Austen at her storytelling best. Author of the masterpieces Pride and Prejudice and Emma, Jane Austen (1775–1817) is one of the most beloved novelists of all time.",
         "readingstatus"=>"Want to Read",
        "coverurl"=> "http://geeksreads.000webhostapp.com/Fatema/thewatsons.jpg"
        
    )
);


$myJSON = json_encode($myObj);

echo $myJSON;
?>
