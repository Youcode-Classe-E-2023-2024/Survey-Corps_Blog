<?php

class Dog {
    public static $var;

    public function __construct($age) {
        self::$var = $age ?: 5;
    }

    public static function year() {
        self::takeAge();
        echo "The dog's age is: " . self::$var;
    }

    private static function takeAge(){
        self::$var = 5;
    }
}

Dog::year();

