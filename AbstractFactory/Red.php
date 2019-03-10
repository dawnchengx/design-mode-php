<?php
require_once "Color.php";
class Red implements Color {
    // 重写
    function fill() {
        echo "Inside Red::fill() method.\n";
    }
}
