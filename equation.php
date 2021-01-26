<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    
    <form method:"get" action="">
    put in number: <input name="N" type="number">
                   <input type="submit" name="SUM">
    </form>

    <?php 
        if(isset($_GET["N"])){
            $sum = 1;
            $input = $_GET["N"];

            for($i = 1; $i<=$_GET["N"]; $i++){
            ($i+1)*($i+1);
            print ($i+1)."*".($i+1);

                if($i==$_GET["N"]){
                    print "=";
                } else {
                    print "+";
                }
            $sum = $sum+($i+1)*($i+1);
        }
        print $sum;

        }
    
    ?>


</body>
</html>