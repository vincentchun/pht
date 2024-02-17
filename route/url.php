<?php

// Request URL components

function rScheme() {
 return $_SERVER['REQUEST_SCHEME']."://";
}

function rProtocol() {// Redundant - equivalent to rScheme
 return ((!empty($_SERVER['HTTPS']) && $_SERVER['HTT[S'] != 'off') || $_SERVER['SERVER_PORT']==443) ? "https://" : "http://";
}

function rHost() {
 return $_SERVER['HTTP_HOST'];
}

function rURI() {//includes query string
 return $_SERVER['REQUEST_URI'];
}

function rQuery() {
 return $_SERVER['QUERY_STRING'];
}

function rURLstring() {
 return rScheme().rHost().rURI();
}

function rURLparsed() {
 return parse_url(rURLstring());
}

function rPathx() {
 return explode("/",rURLparsed()['path']);
}

function rQueryx() {
 $q = [];
 $parts = explode("&", rQuery());//rURLparsed()['query']);
 foreach($parts as $part) {
  if ($part != "") {
   $partx = explode("=", $part);
   if ($partx[0] != "" && $partx[1] != "") {
    $q[$partx[0]] = $partx[1];
   }
  }
 }
 return $q;
}

function test_route_url_php() {
 $ts = "\nrScheme():\n";
 $ts = $ts.rScheme();
 $ts = $ts."\nrProtocol():\n";
 $ts = $ts.rProtocol();
 $ts = $ts."\nrHost():\n";
 $ts = $ts.rHost();
 $ts = $ts."\nrURI():\n";
 $ts = $ts.rURI();
 $ts = $ts."\nrQuery():\n";
 $ts = $ts.rQuery();
 $ts = $ts."\nrURLstring():\n";
 $ts = $ts.rURLstring();
 $ts = $ts."\n(rURLparsed()):\n";
 $ts = $ts.print_r(rURLparsed(), true);
 $ts = $ts."\nrPathx():\n";
 $ts = $ts.print_r(rPathx(), true);
 $ts = $ts."\nrQueryx():\n";
 $ts = $ts.print_r(rQueryx(), true);
 echo "\n<!--".$ts."-->\n";
}

function test_server_comment() {
 echo "\n<!--\n".print_r($_SERVER, true)."\n-->\n";
}
?>
