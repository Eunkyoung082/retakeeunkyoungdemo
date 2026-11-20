<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello</title>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'] ?>">
        <input type="text" name="username" id="username" />
        <input type="submit" value="Submit" />
    </form>
    <?php
    

    if($_SERVE['REQUEST_METHOD'] == "POST") {
        $name = $_POST['username'];
        echo "Hello, ".$name;
    }
?>
</body>
</html>


