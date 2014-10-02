<?php
var_dump(file_get_contents('php://input'));
?>
<form action="index.php" method="post" enctype="multipart/form-data">
  <p><input type="text" name="text" value="" placeholder="Write something">
  <p><input type="file" name="file1">
  <p><button type="submit">Submit</button>
</form>
<!--
<form action="index.php" method="post"> 
  <p><input type="text" name="text" value="" placeholder="Write something">
  <p><input type="file" name="file1">
  <p><button type="submit">Submit</button>
</form>
-->
