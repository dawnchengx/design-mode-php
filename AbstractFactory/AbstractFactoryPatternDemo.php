<?php
require_once "FactoryProducer.php";
// 获取形状工厂
$shapeFactory = FactoryProducer::getFactory("SHAPE");

// 获取形状为 Circle 的对象
$shape1 = $shapeFactory->getShape("CIRCLE");

// 调用 Circle 的 draw 方法
$shape1->draw();

// 获取形状为 Rectangle 的对象
$shape2 = $shapeFactory->getShape("RECTANGLE");

// 调用 Rectangle 的 draw 方法
$shape2->draw();

// 获取形状为 Square 的对象
$shape3 = $shapeFactory->getShape("SQUARE");

// 调用 Square 的 draw 方法
$shape3->draw();

// 获取颜色工厂
$colorFactory = FactoryProducer::getFactory("COLOR");

// 获取颜色为Red的对象
$color1 = $colorFactory->getColor("RED");

// 调用 Red 的 fill 方法
$color1->fill();

// 获取颜色为Green的对象
$color2 = $colorFactory->getColor("GREEN");

// 调用 Green 的 fill 方法
$color2->fill();

// 获取颜色为 Blue 的对象
$color3 = $colorFactory->getColor("BLUE");

// 调用 Blue 的 fill 方法
$color3->fill();
