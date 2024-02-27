class CSSProperty {
 public $name;
 public $type;
 public function __construct($name, $type){
  $this->name = $name;
  $this->type = $type;
 }
}

$properties = array(
 "background-color" => new CSSProperty("background-color","color"),
);
