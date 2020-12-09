<?php
include_once 'header.php';
?>
<div class="container-fluid">
  <?php
  if(isset($_SESSION["useruid"])){
    echo "<h3>Hello ".$_SESSION["useruid"].", Im Francisco Lucena, and this is my Persona web Page.</h3>";
  }else{
  echo "<h3>Francisco Lucena's Personal web Page.</h3>";
}
  ?>
  <p>Welcome to my first page to create a sign up and log system in php, thanks for test it.</p>
</div>

</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</html>