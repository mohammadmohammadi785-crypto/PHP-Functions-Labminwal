<?php
// push, pop, len, Shift, UnShift, map, Filter, Reduce
$numbers = [1,2,3,4,7,8,9];
// count
$total = 0;
for($i = 0; $i< count($numbers); $i++){
    $total += $numbers[$i];
};
echo $total;
echo "<hr>";
// Map
$number1 = [1,3,6,7,8,9];
$newNumber = array_map('trip',$number1);
function trip($number) {
    return $number*3;
};
print_r($newNumber);
echo "<hr>";
$listStudent = ["Ahmad","Ali", "Mohammad", "Komail"];

array_map('greet',$listStudent);
function greet($name){
    echo "<h1>Hi There ". $name . " Good bye</h1>";
};
echo "<hr>";
// ->Arrow Function, anamymas Function<-
$num = [1,2,3,4,5,6,7,8];
$newNum = array_map(function ($item) {
    return $item*2;
},$num);
print_r($newNum);
echo "<hr>";
$numb = [1,2,4,6,7,9];
$newNumb = array_map(fn($i) => $i*2, $numb);
print_r($newNumb);
echo "<hr>";
// Filtered
$filteredNumb = array_filter($numb, function ($value) {return $value%2 == 0;});
print_r($filteredNumb);
echo "<hr>";
$Student = ["Ali","Mohammad", "Ahmad","Komail","Nazanin"];
?>