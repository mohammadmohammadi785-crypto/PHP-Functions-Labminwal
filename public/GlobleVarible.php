<?php
// Cookie
// if (isset($_COOKIE['username'])) {
//     echo 'Hi This is The Ingormation From Cookie ' . $_COOKIE['username'];
// } else {
//     echo 'There is not Cookie Avilible';
// }
// Server
// echo '<hr>' . $_SERVER['SERVER_NAME'];
// echo '<hr>' . $_SERVER['REQUEST_METHOD'];
// echo '<hr>';

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
    <div class="w-full h-screen flex justify-center items-center bg-black text-white border border-white">
        <div class="w-8/12 border flex items-center flex-col gap-3 rounded-sm p-3">
            <form enctype="multipart/form-data" class="flex flex-col gap-3 w-full" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                <input name="password" class="h-12 rounded-sm focus:outline-0 p-5 w-full border" type="password">
                <input type="file" accept="image/*" name="file" class="border file:cursor-pointer border-white w-fit p-3 rounded-sm">
                <button download class="pt-3 pb-3 pl-0 pr-0 text-white border-white border rounded-md " type="submit">Send</button>
                <?php
                echo time();
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $password = $_POST['password'];
                    $Image = $_FILES['file'];
                    echo '<h1 class="font-bold text-2xl text-center">' . $password . '</h1>';
                    print_r($Image);
                };
                ?>
            </form>
        </div>
    </div>
</body> 
</html>
