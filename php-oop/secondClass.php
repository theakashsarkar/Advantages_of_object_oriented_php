<?php
class Vehicle
{
    public $name;
    public $color;

    public function set( string $name, string $color ): void
    {
        $this->color = $color;
        $this->name  = $name;
    }

    public function display(): void
    {
        echo "Name is  : {$this->name}";
        echo "Color is : {$this->color}";
    }

    public function getName(): string
    {
        return $this->name;
    }

}
$obj = new Vehicle;
$obj -> set( "car", "white" );
//$obj -> display();
$name =  $obj ->getName();
echo $name;