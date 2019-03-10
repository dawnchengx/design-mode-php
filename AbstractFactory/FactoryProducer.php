<?php
require_once "ShapeFactory.php";
require_once "ColorFactory.php";
class FactoryProducer {
    public static function getFactory($choice) {
        if ("SHAPE" == $choice) {
            return new ShapeFactory();
        } else if ("COLOR" == $choice) {
            return new ColorFactory();
        }
        return null;
    }
}
