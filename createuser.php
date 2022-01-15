
<?php include 'db.php' ;  ?>

<?php include  'functions.php' ;  ?>

<?php


if (isset($_POST['submit'])){


    createuser();


}

?>


<?php include 'include/header.php'; ?>


<div class='container mt-5'>



<form action="createuser.php" method="post">
Name: <input type="text" name="name" class="mb-5"><br>
password: <input type="password" name="password"><br>
<input type="submit" name='submit'>
</form>

</div>


<?php include 'include/footer.php'; ?>