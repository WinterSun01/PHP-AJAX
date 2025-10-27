<?php
echo '<pre>';

//1. Присваивание по ссылке
echo "--- 1. Присваивание по ссылке ---\n";

$a = 10;
$b = &$a;
echo "Initial: a = $a, b = $b\n";

$b = 20;
echo "After b=20: a = $a, b = $b\n";

$a = 30;
echo "After a=30: a = $a, b = $b\n";

unset($b);
echo "After unset(b): a = $a\n\n";

//2. Передача по ссылке
echo "--- 2. Передача по ссылке ---\n";

function add_one_by_value($x) 
{
    $x = $x + 1;
    return $x;
}

function add_one_by_reference(&$x) 
{
    $x = $x + 1;
}

$val = 5;
echo "Start: val = $val\n";

$val2 = add_one_by_value($val);
echo "After add_one_by_value(val): val = $val (returned $val2)\n";

add_one_by_reference($val);
echo "After add_one_by_reference(&val): val = $val\n\n";

//3. Возврат по ссылке
echo "--- 3. Возврат по ссылке ---\n";

$container = ['x' => 100];

function &get_ref_to_container_element(&$arr, $key) 
{
    return $arr[$key];
}

$ref = &get_ref_to_container_element($container, 'x');
echo "Initial: container['x'] = {$container['x']}, ref = $ref\n";

$ref = 200;
echo "After ref=200: container['x'] = {$container['x']}, ref = $ref\n";

$copy = get_ref_to_container_element($container, 'x');
$copy = 300;
echo "After copy=300: container['x'] = {$container['x']}, copy = $copy\n";

$ref2 = &get_ref_to_container_element($container, 'x');
$ref2 = 400;
echo "After ref2=&...; ref2=400: container['x'] = {$container['x']}, ref2 = $ref2\n\n";

echo '</pre>';
