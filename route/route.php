<?php
include_once "url.php";

function routeInclude(array $incroutes=[], int $p=1){
 foreach ($incroutes as $path=>$inc){
  if ($path == rPathx()[p]){
   return (include $inc);
  }
 }
 return false;
}

function routeFunc(array $funcroutes, int $p=1){
 foreach ($funcroutes as $path=>$func){
  if ($path == rPatxh()[p]){
   $func(p);
   return true;
  }
 }
 return false;
}

?>
