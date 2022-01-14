
<?php include 'db.php' ;  ?>


<?php



if (isset($_POST['submit'])){





    $username = $_POST['name'];


    $pass= $_POST['password'];

echo $pass;













$sql = "INSERT INTO nani5 (name,password) VALUES ('$username',
            '$pass')";


if ($connection->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $connection->error;
  }








}

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



<form action="demo3.php" method="post">
Name: <input type="text" name="name"><br>
password: <input type="password" name="password"><br>
<input type="submit" name='submit'>
</form>



</body>
</html>