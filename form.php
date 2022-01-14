<?php

if (isset($_POST['submit'])){

    echo 'yes itis work good';


$name=$_POST['user-name'];

 $pass= $_POST['password'];

if(strlen($name)  < 5){


echo 'the name most be bigger than five numbers';

}


else{


    echo   $name   ;
}




    };

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



<!-- <h1><?php  echo $name ?> </h1> -->
<h1></h1>


</body>
</html>