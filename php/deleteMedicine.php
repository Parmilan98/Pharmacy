<?php
 
       include "database.php";
       session_start();
       $sql = "DELETE FROM medicine WHERE MID={$_GET['id']}";
       $db->query($sql);
       header('location: manageMedicine.php');
       echo "<p>Delete Medicine Successfully.</p>";

?>   
   