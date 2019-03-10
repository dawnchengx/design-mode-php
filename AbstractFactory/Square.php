<?php
require_once "Shape.php";
class Square implements Shape {
    // 重写
    function draw() {
        echo "Inside Square::draw() method.\n";
    }
}
