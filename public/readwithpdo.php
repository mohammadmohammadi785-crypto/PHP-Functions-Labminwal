<?php
require_once "connection.php";
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
    <div class="w-[90%] mt-2.5 mb-2.5 ml-auto mr-auto p-3">
        <h1 class=" bg-[rgba(0,0,230,0.4)] rounded-tl-md rounded-tr-md text-2xl text-white p-3 text-center">read data
            with PHP Data objects</h1>
        <table class="w-full border rounded-md border-collapse">
            <tr class="bg-[rgba(0,0,0,0.5)]  text-white p-2.5">
                <th class="p-2.5 text-center">ID</th>
                <th class="p-2.5 text-center">Name</th>
                <th class="p-2.5 text-center">lastName</th>
                <th class="p-2.5 text-center">Class</th>
            </tr>
            <?php
            $query = "SELECT * FROM students";
            $statement = $connect->prepare($query);
            $statement->setFetchMode(PDO::FETCH_ASSOC);
            $result = $statement->execute();
            foreach ($statement as $row) {
            ?>
                <tr>
                    <td class="border p-2.5 text-center"><?php echo $row["id"] ?></td>
                    <td class="border p-2.5 text-center"><?php echo $row["name"] ?></td>
                    <td class="border p-2.5 text-center"><?php echo $row["lastname"] ?></td>
                    <td class="border p-2.5 text-center"><?php echo $row["class"] ?></td>
                </tr>
            <?php } ?>
        </table>
    </div>
</body>

</html>