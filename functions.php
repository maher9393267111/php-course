
<?php  include 'db.php'; ?>


<?php

//Create function


function createuser(){


    global $connection;




        $username = $_POST['name'];


         $pass= $_POST['password'];


$salt= "DGSDGSGDPADS";

$passcrypt =  crypt($pass,$salt);







    echo $passcrypt . '</br>';

     $sql = "INSERT INTO nani5 (name,password) VALUES ('$username',  '$pass')";


    if ($connection->query($sql) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error MAN: " . $sql . "<br>" . $connection->error;
      }










}








//update data in database
  function updateuser(){


    global $connection;

    echo 'the button is submitted ';

$username =$_POST['name'];

$password =$_POST['password'];


$id= $_POST['id'];


$sql = 'UPDATE nani5 SET ';


// $sql = "UPDATE nani5 SET name='".$username."', password='".$password."' where id=".$id;


echo  $password;



$sql .= "name = '$username', " ;

$sql .= "password = '$password' " ;

$sql .= "WHERE id = $id " ;





if ($connection->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $connection->error;
  }







}


//delete data from database

function deleteuser(){


    global $connection;

    echo 'the button is submitted ';

$username =$_POST['name'];

$password =$_POST['password'];


$id= $_POST['id'];


$sql = 'DELETE FROM nani5   ';


// $sql = "UPDATE nani5 SET name='".$username."', password='".$password."' where id=".$id;





// $sql .= "name = '$username', " ;

// $sql .= "password = '$password' " ;

$sql .= "WHERE id = $id " ;





if ($connection->query($sql) === TRUE) {
    echo "user isdeleted successfully created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $connection->error;
  }







}















function showalldata(){

global $connection;



$sql= "SELECT * FROM nani5" ;




$result = mysqli_query($connection,$sql)  ;



if(!$result){

    // die('query is failded' );

    echo "Error: " . $sql . "<br>" . $connection->error;


}





while($row=mysqli_fetch_assoc($result)){

    $id= $row['id'];

    echo "<option  value='$id' >$id</option> ";

echo 'hello maher';

    }



}



//Read data from daTABASE



function ReadData(){

    global $connection;



    $sql= "SELECT * FROM nani5" ;




    $result = mysqli_query($connection,$sql)  ;



    if(!$result){

        // die('query is failded' );

        echo "Error: " . $sql . "<br>" . $connection->error;


    }





    while($row=mysqli_fetch_assoc($result)){

        $id= $row['id'];
        $name= $row['name'];
        $password= $row['password'];

print_r($name);


    echo 'hello maher';

        }



    }

















?>