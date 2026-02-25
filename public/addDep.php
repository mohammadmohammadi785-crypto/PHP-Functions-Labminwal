<?php
include 'db.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $description = $_POST['desc'];
    insertDepartment($name, $description);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../src/output.css">
</head>
<body>
    <div class="h-screen w-full flex text-white border-white justify-center items-center ">
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>" class="w-3/4 border p-8 rounded-md flex flex-col gap-1.5 bg-gray-800">
            <input placeholder="Department Name" name="name" type="text" class="border rounded-md h-8 focus:outline-0 p-2 ">
            <textarea placeholder="Department Description And some details" class="border h-20 rounded-md focus:outline-0 p-2 resize-none" name="desc"></textarea>
            <button type="submit" class="border p-1 rounded-md">Save</button>
        </form>
    </div>    
</body>
</html>