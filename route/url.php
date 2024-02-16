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
 $parts = explode("&", rURLparsed()['query']);
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
 echo "<br>rScheme():<br>";
 echo rScheme();
 echo "<br>rProtocol():<br>";
 echo rProtocol();
 echo "<br>rHost():<br>";
 echo rHost();
 echo "<br>rURI():<br>";
 echo rURI();
 echo "<br>rQuery():<br>";
 echo rQuery();
 echo "<br>rURLstring():<br>";
 echo rURLstring();
 echo "<br>(rURLparsed()):<br>";
 echo print_r(rURLparsed());
 echo "<br>rPathx():<br>";
 echo print_r(rPathx());
 echo "<br>rQueryx():<br>";
 echo print_r(rQueryx());
}

function test_server_comment() {
 echo "<!--".print_r($_SERVER, true)."-->";
}
?>
