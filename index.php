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
        <form method="post" action="index.php">
            Name<input type="text" name="name">
            Email<input type="text" name="email">
            Age<input type="text" name="age">
            Year<input type="text" name="year">
            
            
            <input type="submit" name="submit" value="press">
        </form>
        
        
        <?php
     //  $name=$email=$yr=$age="";
    //   $_POST["name"]=$_POST["email"]=$_POST["age"]=$_POST["year"]="";
       
        $name = $_POST["name"];
        $email = $_POST["email"];
        $age = $_POST["age"];
        $yr = $_POST["year"];
        
        $valide=0;
        
        echo $age;
       if(!filter_var($age,FILTER_VALIDATE_INT)===FALSE){
           echo '| valid age';
           $valide++;
       }else{ echo '| UNvalid age';}
       if(!filter_var($email,FILTER_VALIDATE_EMAIL)===FALSE){
           echo '| valid email';
           $valide++;
       }else{ echo '| UNvalid email';}
       if(!filter_var($name,FILTER_SANITIZE_STRING)===FALSE){
           echo '| valid name';
           $valide++;
       }else{ echo '| UNvalid name';}
       if(!filter_var($yr,FILTER_VALIDATE_INT)===FALSE){
           echo '| valid yr';
           $valide++;
       }else{ echo '| UNvalid yr';}

       
       
       if($valide===4){
           
           echo 'pass';
       }
        ?>
    </body>
</html>
