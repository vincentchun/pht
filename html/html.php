<?php
$copyright = "&copy; Vincent G. Chun, 2022";

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
class E {
	public $t; // Element tag
	public $a; // Attributes
	public $c; // Content - dynamic type: can either be an array of E, string, or other primitive
	
	function __construct(string $t, array $a=[], $c=[]){
		$this->t = $t;
		$this->a = $a;
		if (is_array($c)){
			$this->c = $c;
		} else {
			$this->c = array($c);
		}
	}
	
	function str() {
		if  ($this->t == ""){
			$stres = strela($this->c);
		}
		elseif (in_array($this->t, array("area", "base", "br", "embed", "hr", "img", "input", "link", "meta", "source", "track"))){
			$stres = "<" . $this->t . attrstr($this->a) . ">";
		} else {
			$stres = "<" . $this->t . attrstr($this->a) . ">" . strela($this->c) . "</" . $this->t . ">";
		}
		return $stres;
	}

	function add(...$els){
		array_push($this->c, ...$els);
	}
	function pre(...$els){
		array_unshift($this->c, ...$els);
	}
	function att(array $toset){
		$this->a = array_merge($this->a, $toset);
	}
}

// Function to create html element
function el(string $t, array $a=[], $c=[]){
	return new El($t,$a,$c);
}

// String Element Array: Render array of HTML elements to string
function strea(array $a){
	$str = "";
	foreach($a as $v){
		if ($v instanceof El){
			$str = $str . $v->str();
		} elseif (is_array($v)){
			$str = $str . strea($v);
		} else {
			$str = $str . $v;
		}
	}
	return $str;
}

function render($in){
	if ($in instanceof El){
		return $in->str();
	} elseif (is_array($in)){
		return strea($in);
	} else {
		return $in;
	}
}

function output($in){
	echo render($in);
}
/**
$bod = new El("body",[],[]);
$hed = new El("h1",["title"=>"heading"],["Heading"]);
$hed->att(["class"=>"main"]);
$bod->add($hed);
echo $bod->str();
//*/
?>
