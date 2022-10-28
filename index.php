<?php
include "./letsphp/front/html/html.php";
include "./letsphp/front/html/tags.php";
echo "Hello world!";
echo $myname;

//$hed = new El("h1",array("title"=>"head"),array("Heading"));
$hed = h_h1(array("title"=>"h_h1"),array("Heading"));

echo $hed->str();
/*$dir = scandir("./");// Directory of current file
foreach($dir as $v){
	echo($v);
}*/
?>
