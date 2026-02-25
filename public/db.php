<?php
function dbConection()
{
    $connect = new mysqli('localhost', 'root', '', 'my_db');
    return $connect;
};

function showDepartments()
{
    $connect = dbConection();
    $command = 'SELECT * FROM department ORDER By id ';
    return $connect->query($command);
}

function insertDepartment(string $name, string $description)
{
    $connect = dbConection();
    $command = "INSERT INTO department(name, description) VALUES('$name','$description')";
    $connect->query($command);
    header('location:index.php');
}
