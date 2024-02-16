<?php

// Request URL components
function rProtocol() {
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
 return rProtocol().rHost().rURI();
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

?>
