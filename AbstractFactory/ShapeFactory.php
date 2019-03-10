<?php
require_once "AbstractFactory.php";
require_once "Circle.php";
require_once "Rectangle.php";
require_once "Square.php";
class ShapeFactory extends AbstractFactory {
    // 重写
    function getShape($shapeType) {
        if ( null == $shapeType) {
            return null;
        }
        if ( "CIRCLE" == $shapeType ) {
            return new Circle(); 
        } else if ("RECTANGLE" == $shapeType) {
            return new Rectangle();
        } else if ("SQUARE") {
            return new Square();
        }
        return null;
    }

    // 重写
    function getColor($color) {
        return null;
    }
}
