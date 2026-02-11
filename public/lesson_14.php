<?php
$list = ["Maryam", "Mina", "Naaznin", "Mohammad", "Ali", "Komail"];
// Array pop
array_pop($list);
print_r($list);
echo "<br>";
// Array slice
$newList = array_slice($list, 2, 2);
print_r($newList);
// Array Merge
$merge = array_merge($list, $newList);
print_r($merge);
echo "<br>";
// Array Map
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9];
function getNumber($number)
{
    if ($number % 2 !== 0) {
        return $number;
    }
}
$newArr = array_map('getNumber', $numbers);
print_r($newArr);
echo "<br>";
$newarray = [100, 300, 480, 530, 320, 750, 970];
function getPrice($price)
{
    return $price * 0.03;
}
$total = array_map('getPrice', $newarray);
print_r($total);
echo "Price <br>";
function getAffordablePrice($num)
{
    return $num >= 200 and $num <= 500;
}
$newPrice = array_filter($total, 'getAffordablePrice');
print_r($newPrice);
echo "<br>";
// Array raduce
$outCome = array_reduce($total, function ($current, $item) {
    $current += $item;
    return $current;
}, 0);
echo $outCome . "<br>";
// radeuse
// $newarray = [100,300,480, 530,320,750 ,970];
// function getNewPrice($price){
//     return $price*0.03;
// }
// $natija = array_reduce($newarray, function ($carry, $item) {
//     $carry+=$item;
//     return $carry*0.03;
// });
// echo $natija;
