<?php
 
       include "database.php";
       session_start();
       $sql = "DELETE FROM supplier WHERE ID={$_GET['id']}";
       $db->query($sql);
       header('location: manageSupplier.php');
       echo "<p>Delete Supplier Successfully.</p>";


?>   
   