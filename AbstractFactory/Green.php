<?php
require_once "Color.php";
class Green implements Color {
    // 重写
    function fill() {
        echo "Inside Green::fill() method.\n";
    }
}
