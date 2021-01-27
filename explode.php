<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<form method="get" action="">
    <input type="submit" name="submit">
</form>


<?php
if(isset($_GET["submit"])){
    $file = fopen("data9.txt", "r");
    while($line = fgets($file)){
        $exp = explode($line, "|");
        print implode("|", $exp);
}
    }

?>

</body>
</html>