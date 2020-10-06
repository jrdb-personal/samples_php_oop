<?php
abstract class AbstractClass{
    
    abstract protected function getValue();
    abstract protected function prefixValue($prefix);

    function printOut() {
        print $this->getValue() . "\n";
    }
}

class ConcreteClass1 extends AbstractClass{  
    protected function getValue() {
        return "ConcreteClass1 <br>";
    }
    public function prefixValue($prefix) {
        return "{$prefix}ConcreteClass1 <br>";
    }
}

class ConcreteClass2 extends AbstractClass{
    public function getValue() {
        return "ConcreteClass2 <br>";
    }
    public function prefixValue($prefix) {
        return "ConcreteClass2{$prefix} <br>";
    }
}

$objClass1 = new ConcreteClass1;
echo $objClass1->prefixValue('Sample') ."<br>";

$objClass2 = new ConcreteClass2;
echo $objClass2->prefixValue('Test') ."<br>";
?>