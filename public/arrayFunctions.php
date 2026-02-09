<?php
// push, pop, len, Shift, UnShift, map, Filter, Reduce
$list = [1,2,3,4,5,6,7,8,9];
array_push($list, 10,11,12,13);
// -> Pop <- ======================
array_pop($list);
// -> UnShift <- =======================
array_unshift($list, 14,15,16);
// -> splice <- =============================================
array_splice($list, 4, 2,[17,18,19]);
print_r($list);
echo "<hr>";
$listOfStudents = ["Komail", "Ali Reza", "Mohammad", "Nazanin", "Mustafa"];
array_splice($listOfStudents, 4,0 , ["Sara", "Mina", "Frishta"]);
print_r($listOfStudents);
echo "<hr>";
// -> slice <- ==============================================
$newListOFStudents = array_slice($listOfStudents, 2,6 );
print_r($newListOFStudents);
echo "<hr>";
// -> array marge <- ====================
$StudentList = ["Komail", "Alireza"];
$femailList = ["Maryam","Mina"];
$Others = ["Kazim", "Ehsan"];
$newStList = array_merge($StudentList,$Others, $femailList);
print_r($newStList);
echo "<hr>";
// -> Array Combine <- ======================
$keys = [111,222,333,444];
$values = ["Ali", "Reza", "Mohammad", "Nazanin"];
$combines = array_combine($keys, $values);
print_r($combines);
echo "<hr>";
// -> Array Filter <- ==============================
$studen = ["Komail", "Ali Reza", "Mohammad", "Omid"];
$newStuden = array_filter($studen, fn($name)=> str_contains(strtolower($name), 'o'));
print_r($newStuden);
echo "<hr>";
echo "------------------------------------------------------------ <br>";
// count ==============================
$numbers = [1,2,3,4,7,8,9]; 
$total = 0;
for($i = 0; $i< count($numbers); $i++){
    $total += $numbers[$i];
};
echo $total;
echo "<hr>";
// -> Map <- ===========================
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
// ======================================
$Student = ["Ali","Mohammad", "Ahmad","Komail","Nazanin"];
$filterStudent = array_filter($Student, function ($value) {
    $i = 0;
    while($i < strlen($value)){
        if($value[$i] == "o" OR $value[$i] == "O"){
            return $value;
        };
        $i++;
    }
});
print_r($filterStudent);
?>