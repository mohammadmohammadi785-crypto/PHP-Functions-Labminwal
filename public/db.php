<?php
function dbConection()
{
    $connect = new mysqli('localhost', 'root', '', 'my_db');
    return $connect;
};

function showDepartments()
{
    $connect = dbConection();
    $command = 'SELECT * FROM department ORDER By name ASC ';
    return $connect->query($command);
}

function insertDepartment(string $name, string $description)
{
    $connect = dbConection();
    $command = "INSERT INTO department(name, description) VALUES('$name','$description')";
    $connect->query($command);
    header('location:index.php');
}

function update(string $name, string $description, $id)
{
    $command = "UPDATE department SET name='$name', description='$description' WHERE id='$id'";
    $connect = dbConection();
    if ($connect->query($command)) {
        header('location:index.php?message=department data updated sucessfully');
    } else
        (
            header('location:index.php?messege=Somthing went wrong')
        );
}

function displayValues($id)
{
    $command = "SELECT * FROM department WHERE id='$id'";
    $connect = dbConection();
    $result = $connect->query($command);
    return $result;
}

function deleteDepartment($id)
{
    $command = "DELETE FROM department WHERE id='$id'";
    $connection = dbConection();
    if ($connection->query($command)) {
        header('location:index.php?text=one item has been deleted');
    } else {
        header('location:index.php?text=somthing went wrong in deleting one item');
    }
}
