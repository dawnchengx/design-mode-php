<?php
require_once "Shape.php";
class Circle implements Shape {
    // 重写
    function draw() {
        echo "Inside Circle::draw() method.\n";
    }
}
