<?php
class Foo {
    public $color;
    public function display() {
        echo "Hello Bangladesh";
    }
    public function setColor( $color ) {
        $this->color = $color;
    }
    public function getColor() {
        echo "This Color is : {$this->color}";
    }
}

$obj = new Foo();
$obj->color = "red";
echo $obj->color;
$obj->getColor();