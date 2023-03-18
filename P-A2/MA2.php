<?php
//PARENT CLASS
class KpopItems{
    private $group;
    private $merch;
    private $price;

//SETTERS AND GETTERS
public function setGroup($group)
    {
        $this->group=$group;
    }
    
public function setMerch($merch)
    {
        $this->merch=$merch;
    }

public function setPrice($price)
    {
        $this->price=$price;
    }

public function getGroup()
    {
        return $this->group;
    }
public function getMerch()
    {
    return $this->merch;
    }

public function getPrice()
    {
    return $this->price;
    }


//DISPLAY INFO
public function displayInfo()
    {
        echo "Kpop Group: ".$this->getGroup()."<br>";
        echo "Type of Merch: ".$this->getMerch()."<br>";
        echo "Price: ".$this->getPrice()."<br>";
    }
}

//CHILD CLASS
class KpopSales extends KpopItems{
    //PARAMETERIZED CONSTRUCTOR
    public function __construct(private $paymentMethod){
        
    }

    //CUSTOMIZED GETTER METHOD
    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }
   
    public function printInfo()
    {
        echo "Mode of Payment: ".$this->getPaymentMethod()."<br>";
    }

    //OVERRIDING
    public function displayInfo()
    {
        echo "Kpop Group: ".$this->getGroup()."<br>";
        echo "Type of Merch: ".$this->getMerch()."<br>";
        echo "Price: ".$this->getPrice()."<br>";
        echo "Mode of Payment: ".$this->getPaymentMethod()."<br>";
        
    }

    //OVERLOADING
    public function printInfo2($shipment)
    {
        echo "Mode of Shipment: ".$shipment."<br>";
    }

}

//MULTILEVEL INHERITANCE
class MultilevelInheritance extends KpopSales{

}

//HIERARCHICAL INHERITANCE
class HierarchicalInheritance extends KpopItems{

}

//object 1 parent class
$order1=new KpopItems();
$order1->setGroup("BTS");
$order1->setMerch("Proof Album Standard Edition");
$order1->setPrice(3000);
$order1->displayInfo();

echo "<br>";

//object 2 child class
$order2=new KpopSales("COD");
$order2->setGroup("TWICE");
$order2->setMerch("CANDYBONG Lightstick version 3");
$order2->setPrice(3500);

//methods
$order2->printInfo();
$order2->displayInfo();
$order2->printInfo2("J&T Express");

echo "<br>";

//object 3 child class
$order3=new KpopSales("GCash");
$order3->setGroup("Aespa");
$order3->setMerch("Winter Photocard Wintears");
$order3->setPrice(1200);

//methods
$order3->printInfo();
$order3->displayInfo();
$order3->printInfo2("GoGo Xpress");

