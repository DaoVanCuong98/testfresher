<?php
class Person {
    public $name;
    public $age;
    # getter and setter methods
    function set_name($name) {
        $this->name = $name;
    }
    function get_name() {
        return $this->name;
    }
    function set_age($age) {
        $this->age = $age;
    }
    function get_age() {
        return $this->age;
    }

    function info(){
        return $this->name." person has ".$this->age." age";
    }

}
$person = new Person();
$person->set_name("Cuong");
$person->set_age("25");

echo $tom->info();


class Student extends Person {
    function __construct($name) {
        $this->set_name($name);
 }
}
?>

