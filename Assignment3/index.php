<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            h2{
                color:red;
            }
        </style>
    </head>
    <body>
        <?php
        $num1 = $_GET["n1"];
        $num2 = $_GET["n2"];

        echo "<p>Number 1 = $num1</p>";
        echo "<p>Number 2 = $num2</p>";

        if (empty($num1)) {
            echo "<h2> Parameter is missing </h2>";
            $num1 = 10;
        }
        if (empty($num2)) {
            $num2 = 10;
            echo "<h2> Parameter is missing </h2>";
        }

        if (is_numeric($num1) && is_numeric($num2)) {

            if (isset($num1) && isset($num2)) {
                for ($i = 1; $i <= $num2; $i++) {
                    echo "$num1 * $i =" . ($i * $num1) . "<br>";
                }
            }
        }else {
            echo "<h2> Enter valid parameter </h2>";
        }

        ?>
    </body>
</html>
