<?php
include "./myphp/route/route.php";
include "./myphp/front/html/html.php";
include "./myphp/front/html/tags.php";

$ROOT = $_SERVER['DOCUMENT_ROOT'];
$purl = purl($_SERVER['REQUEST_URI']);

$routearray = [
	"/" => "/home/home.php"
];

$connected = router($routearray, $purl);
echo $connected;
/*echo "Hello world!";
echo $myname;

//$hed = new El("h1",array("title"=>"head"),array("Heading"));
$hed = h_h1(array("title"=>"h_h1"),array("Heading"));

echo $hed->str();
/*$dir = scandir("./");// Directory of current file
foreach($dir as $v){
	echo($v);
}*/
?>
