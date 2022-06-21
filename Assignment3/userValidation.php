<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Assignment 3</title>
        <style>
            h1{
                color: red;
            }
        </style>
    </head>
    <body>
        <?php

        
        $name = $_GET["userName"];
        $p1 = $_GET["p1"];
        $p2 = $_GET["p2"];
        $e1 = $_GET["e1"];
        $e2 = $_GET["e2"];
        
        if(empty($name)){
            echo "<h1> User name is empty </h1>";
        }
        if(empty($p1)){
            echo "<h1> Password is empty </h1>";
        }
        if(empty($p2)){
            echo "<h1> Password is empty </h1>";
        }
        if(empty($e1)){
            echo "<h1> Email is empty </h1>";
        }
        if(empty($e2)){
            echo "<h1> Email is empty </h1>";
        }
        
        if($p1 === $p2){
            if($e1 === $e2){
                echo '
                <table>
                    <tr>
                        <td> User name is:</td>
                        <td>', $name, '</td>
                    </tr>
                    <tr>
                        <td> Password is:</td>
                        <td>', $p1, "<br>", $p2, '</td>
                    </tr>
                        <tr>
                        <td> Email is:</td>
                        <td>', $e1, "<br>", $e2, '</td>
                    </tr>
                </table>';
                
            }else {
              echo "<h1> Email does not match </h1>";  
            }
        }else {
            echo "<h1> Password does not match </h1>";
        }

        ?>
        <input type="submit"> 
    </body>
</html>
