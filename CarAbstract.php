<?php
include("/var/www/HomeWork/CarInterface.php");

abstract class CarAbstract implements CarInterface
{
    public $brand;
    public $model;
    public $yearIssue;

    public function __construct($brand="", $model="", $yearIssue="")
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->yearIssue = $yearIssue;
    }


    //abstract public function brand();
    //abstract public function model();
    //abstract public function yearIssue();

}
class Car extends CarAbstract
{
    function __construct($brand="", $model="", $yearIssue="")
    {
        parent::__construct($brand, $model, $yearIssue);
    }
    function showInfo()
    {
        echo"<p> Brand - ", $this->brand;
        echo"</br> Model - ", $this->model;
        echo"</br> Year Issue - ", $this->yearIssue;
    }

}
$car1 = new Car("BMW", "X6", "2010");
$car1->showInfo();

$car2 = new Car("Audi", "A6", "2008");
$car2->showInfo();

$car3 = new Car("Ford", "Focus", "2011");
$car3->showInfo();