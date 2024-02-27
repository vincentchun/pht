/*class CSSProperty {
 public $name;
 public $type;
 public function __construct($name, $type){
  $this->name = $name;
  $this->type = $type;
 }
}

$properties = array(
 "background-color" => new CSSProperty("background-color","color"),
 "color" => new CSSProperty("background-color","color"),
 "display" => new CSSProperty("display","display"),
);*/

$cssPropTypes = array(
 "background" => "background-color background-image background-position background-size background-repeat background-origin background-clip background-attachment",
 "background-color" => "color",
 "background-image" => "url(\"\")",
 "color" => "color",
 "display" => "display",
);

class CSSstr {
 public $props;
 public function __construct($props){
  $this->props = $props;
 }
 public function __toString(){
  $s = "";
 	foreach ($this->props as $p=>$v){
 		$s = $s.$p.":".$v.";";
 	}
 	return $s;
 }
}
