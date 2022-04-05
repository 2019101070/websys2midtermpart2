<?php
class Fruit {
  public $name;
  public $color;

  function __construct($name, $color) {
    $this->name = $name; 
    $this->color = $color; 
  }
  function get_name() {
    return $this->name;
  }
  function get_color() {
    return $this->color;
  }
}

$apple = new Fruit("apple", "red");
$grape = new Fruit("grape", "purple");
echo "I'm an {$apple->get_name()}. My color is {$apple->get_color()}.";
echo "<br>";
echo "I'm a {$grape->get_name()}. My color is {$grape->get_color()}.";
?>