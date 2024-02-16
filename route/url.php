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
 echo "\nrScheme():\n";
 echo rScheme();
 echo "\nrProtocol():\n";
 echo rProtocol();
 echo "\nrHost():\n";
 echo rHost();
 echo "\nrURI():\n";
 echo rURI();
 echo "\nrQuery():\n";
 echo rQuery();
 echo "\nrURLstring():\n";
 echo rURLstring();
 echo "\n(rURLparsed()):\n";
 echo print_r(rURLparsed(), true);
 echo "\nrPathx():\n";
 echo print_r(rPathx(), true);
 echo "\nrQueryx():\n";
 echo print_r(rQueryx(), true);
}

function test_server_comment() {
 echo "<!--".print_r($_SERVER, true)."-->";
}
?>
