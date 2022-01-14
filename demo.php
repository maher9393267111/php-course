<!-- 
<?php


 if (isset($_POST['submit'])){


 $username = $_POST['user'];


 $pass= $_POST['pass'];


//  include'db.php';

$connection = mysqli_connect('localhost','root','','login in');

if($connection){


echo 'connection with database success' . '</br>';


}else{


echo 'connected failded with daTABASE';

}





$QUERY= "INSERT INTO school (name,password)" ;


$QUERY  .= "VALUES ('$username','$pass')";


$result = mysqli_query($connection,$QUERY)  ;



if($result){


echo 'query is insert successfully';

}



if(!$result){

    die('query is failded' );




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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script defer src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</head>
<body>

<form class='col-6 ml-5' style='margin-left:50px;' action="demo.php"  method='post'>
<div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">username</label>
  <input name='user' type="text" class="form-control"  placeholder="user">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">pass</label>
  <input name='pass' type="password" class="form-control"  placeholder="pass">
</div>

<button type='submit' name='submit' value='submit'>submit</button>


</form>


</body>
</html>
 -->
