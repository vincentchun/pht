<?php
// HTML Element class
//$copyright = "&copy; Vincent Chun, CV Learning, 2022";
// HTML Attributes as associative arrays, eg: $attr = ["id"=>"main", "class"=>"center"];
function attrstr($at){
	$astr = "";
	foreach($at as $k => $v){
		$astr = $astr . " " . $k . "=" . '"' . $v . '"';
	}
	return $astr;
}

// HTML Elements
class El {
	public $t;
	public $a;
	public $c;
	
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

// String Element Array: Render array of HTML elements to string
function strela(array $a){
	$str = "";
	foreach($a as $v){
		if ($v instanceof El){
			$str = $str . $v->str();
		} elseif (is_array($v)){
			$str = $str . strela($v);
		} else {
			$str = $str . $v;
		}
	}
	return $str;
}

function el(string $t, array $a=[], $c=[]){
	return new El($t,$a,$c);
}

/**
$bod = new El("body",[],[]);
$hed = new El("h1",["title"=>"heading"],["Heading"]);
$hed->att(["class"=>"main"]);
$bod->add($hed);
echo $bod->str();
//*/
?>
