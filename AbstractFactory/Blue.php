<?php
require_once "Color.php";
class Blue implements Color {
    // 重写
    function fill() {
        echo "Inside Blue::fill() method.\n";
    }
}
