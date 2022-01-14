

 <?php include "functions.php";?>

 <?php  include 'db.php' ;?>


<?php





 if (isset($_POST['submit'])){

updateuser();



//     echo 'the button is submitted ';

// $username =$_POST['name'];

// $password =$_POST['password'];


// $id= $_POST['id'];


// $sql = 'UPDATE nani5 SET ';


// // $sql = "UPDATE nani5 SET name='".$username."', password='".$password."' where id=".$id;


// echo  $password;



// $sql .= "name = '$username', " ;

// $sql .= "password = '$password' " ;

// $sql .= "WHERE id = $id " ;





// if ($connection->query($sql) === TRUE) {
//     echo "New record created successfully";
//   } else {
//     echo "Error: " . $sql . "<br>" . $connection->error;
//   }






 }





?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit php</title>

<?php  include'bootstrap.php' ?>

</head>
<body>


<form action="edit.php"  method='post'>

<div  class='container col-md-6 mt-5'>




<div class="mb-3 ">
  <label for="formGroupExampleInput" class="form-label">name</label>
  <input type="text" class="form-control" name='name' id="formGroupExampleInput" placeholder="name">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">password</label>
  <input type="password" name='password' class="form-control" id="formGroupExampleInput2" placeholder="password">
</div>

<div class="col-auto">
    <label class="visually-hidden" for="autoSizingSelect">edit</label>
    <select class="form-select" name= 'id' id="">

<?php


showalldata();

?>




    </select>
  </div>


  <input type="submit" name='submit'>



</div>
</form>

</body>
</html>