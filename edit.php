

 <?php include "functions.php";?>

 <?php  include 'db.php' ;?>


<?php



 if (isset($_POST['submit'])){

updateuser();





 }



?>








<?php include 'include/header.php'; ?>


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



<?php include 'include/footer.php'; ?>