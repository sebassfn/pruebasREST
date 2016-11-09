<?php

if ($_POST) { 
 $begin = $_POST["begin"];
 $end = $_POST["end"];
 $inct = $_POST["inct"];
 
 for ($i = $begin; $i <= $end; $i+=$inct) {
  echo "$i<br />";
 }

}

else { // otherwise display the form
?>

 <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
 Begin number:
 <input type="text" name="begin" size=5><br />
 End number:
 <input type="text" name="end" size=5><br />
 Increment by:
 <input type="text" name="inct" size=5><br />
 <input type="submit" value="Check"></form></p> 

<?php
}

?>
