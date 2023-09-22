<?php

class Student
{
    public $name;
    public $lastname;
    public $lesson;
    public function __construct($name, $lastname, $lesson) {
    $this->name = $name;
    $this->lastname = $lastname;
    $this->lesson = $lesson;
    }
    public function presentation() {
    var_dump( "Je suis $this->name $this->lastname et j'intègre les cours de $this->lesson <br>");
    }
}

$firstStudent = new Student("Maxime", "Perrin", "Développeur");
$secondStudent = new Student("Paul", "Dokel", "Réseau");
$thirdStudent = new Student("Pierre", "Note", "Graphiste");

$firstStudent->presentation();
$secondStudent->presentation();
$thirdStudent->presentation();