<?php

// Check if this script is included
$PHT_HTML_INCLUDED = "<!--PHT_HTML_INCLUDED-->";

// HTML Attributes as associative arrays, eg: 
// $attr = ["id"=>"main", "class"=>"center"];

// Convert associative array into attribute string:
function atstr($at){
	$str = "";
	foreach($at as $k => $v){
		$str = $str . " " . $k . "=" . '"' . $v . '"';
	}
	return $str;
}

// HTML Elements
class H {
 public $t;
 public $a;
 public $s;
 public $c;
 function __construct($t="", $a=[], $s="", $c=[]){
  $this->t = $t;
  $this->a = $a;
  $this->s = $s;
  $this->c = $c;
 }
 function __toString(){
  if ($this->t=="") {
   $str = $this->s;
   foreach ($this->c as $e){
    $str = $str.$e->__toString();
   }
  }
  elseif (in_array($this->t, array("area", "base", "br", "embed", "hr", "img", "input", "link", "meta", "source", "track"))){
   $str = "<" . $this->t . atstr($this->a) . ">";
  } else {
   $str = "<" . $this->t . atstr($this->a) . ">";
   $str = $str.$this->s;
   foreach ($this->c as $e){
    $str = $str.$e->__toString();
   }
   $str = $str . "</" . $this->t . ">";
  }
  return $str;
 }
	function add(...$els){
		array_push($this->c, ...$els);
	}
	function pre(...$els){
		array_unshift($this->c, ...$els);
	}
	function at(array $toset){
		$this->a = array_merge($this->a, $toset);
	}
}

// Include tag functions
include_once "tags.php";

?>
