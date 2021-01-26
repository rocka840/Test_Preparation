<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Text File Reader</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    
<form method="get" action="">
    <input type="submit" name="submit">
</form>

<?php 

if(isset($_GET["submit"])){
    $file = fopen("datafile.txt", "r");
    while($number = fgets($file)){
        print($number);
    }
}
?>
<br>
<?php
print "FINISHED READING!"
?>

</body>
</html>