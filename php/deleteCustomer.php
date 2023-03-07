<?php
       include "database.php";
       // session_start();
       $sql = "DELETE FROM customer WHERE ID={$_GET['id']}";
       $db->query($sql);
       header('location: manageCustomer.php');
       echo "<p>Delete Customer Successfully.</p>";
?>   
   