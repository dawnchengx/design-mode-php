<?php
require_once "Shape.php";
class Rectangle implements Shape {
    // 重写
    function draw() {
        echo "Inside Rectangle::draw() method.\n";
    }
}
