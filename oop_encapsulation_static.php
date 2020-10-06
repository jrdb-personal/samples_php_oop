<?php
class Test{
    public static function aStaticMethod() {
        return "show static message<br>";
    }
}
echo Test::aStaticMethod();
$classname = new Test;
echo $classname->aStaticMethod(); // As of PHP 5.3.0
class TestB
{
    public static $my_static = 'sample text';
    public function staticValue() {
        return self::$my_static;
    }
}
class TestC extends TestB
{
    public static $my_static = 'sample text on C';
    public static function TestCStatic() {
        return self::$my_static;
    }
}
echo TestC::$my_static . "<br>";
$B = new TestB();
$C = new TestC();
echo $B->staticValue()."<br>";
echo $B->my_static . "<br>";   
echo $C->staticValue() . "<br>";
echo $C->TestCStatic(). "<br>";
?>