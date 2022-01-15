


<?php include 'db.php' ;  ?>

<?php






$sql= "SELECT * FROM nani5" ;






$result = mysqli_query($connection,$sql)  ;



if(!$result){

    die('query is failded' );




}




?>



<?php include 'include/header.php'; ?>




<h1>userr page</h1>

<div class='col-md-6'>


<?php   // LOOP TILL END OF DATA
                while($rows=$result->fetch_assoc())
                {
             ?>
            <tr>
                <!--FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN-->
                <td><?php echo $rows['name'];?></td>
                <td><?php echo $rows['password'];?></td>

            </tr>
            <?php
                }
             ?>






</div>



<?php include 'include/footer.php'; ?>