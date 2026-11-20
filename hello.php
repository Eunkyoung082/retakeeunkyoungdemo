<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello</title>
</head>
<body>
    <form method="post" action="hello.php">
        <input type="text" name="username" id="username" />
        <input type="submit" value="Submit" />
    </form>
</body>
</html>

<?php
    $name = $_POST['username'];

    echo "Hello, ".$name;
?>
