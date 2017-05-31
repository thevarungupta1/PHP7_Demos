<?php


    spl_autoload_register(function ($class_name,$interface_name) {
        include $class_name . '.php';
    });

    $obj  = new MyClass1();
    $obj2 = new MyClass2();

    class Foo implements ITest {

    }


?>