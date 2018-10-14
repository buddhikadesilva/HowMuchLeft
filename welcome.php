<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $name = $_POST["name"];
        $email = $_POST["email"];
        $age = $_POST["age"];
        $yr = $_POST["year"];
        
        echo $name;
        echo $email;
        echo $age;
        echo $yr;
        
        filter_var($age,FILTER_VALIDATE_INT);
        ?>
    </body>
</html>
