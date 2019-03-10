<?php
require_once "AbstractFactory.php";
require_once "Red.php";
require_once "Green.php";
require_once "Blue.php";
class ColorFactory extends AbstractFactory {
    // 重写
    function getShape($shapeType) {
        return null;
    }

    // 重写
    function getColor($color) {
        if (null == $color) {
            return null;
        }
        if ("RED" == $color) {
            return new Red(); 
        } else if ("GREEN" == $color) {
            return new Green();
        } else if ("BLUE" == $color) {
            return new Blue();
        }
        return null;
    }
}
