<?php

if (isset($_GET['id'])) {
    include ('db.php');
    $data = displayValues($_GET['id']);
    $result = $data->fetch_assoc();
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include ('db.php');
    $name = $_POST['name'];
    $desc = $_POST['desc'];
    $id = $_POST['id'];
    update($name, $desc, $id);
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
            <h1 class="text-center text-2xl">Update Form</h1>
            <input style="display: none;" name="id" type="number" value="<?php echo $result['id'] ?>">
            <input value="<?php echo $result['name'] ?>" placeholder="Department Name" name="name" type="text" class="border rounded-md h-8 focus:outline-0 p-2 ">
            <textarea placeholder="Department Description And some details" class="border h-20 rounded-md focus:outline-0 p-2 resize-none" name="desc">
                <?php echo $result['description'] ?>
            </textarea>
            <button type="submit" class="border p-1 rounded-md">Save</button>
        </form>
    </div>    
</body>
</html>