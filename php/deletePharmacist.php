<?php
 
       include "database.php";
       session_start();
       $sql = "DELETE FROM pharmacist WHERE PAID={$_GET['id']}";
       $db->query($sql);
       header('location: managePharmacist.php');
       echo "<p>Delete Pharmacist Successfully.</p>";


?>   
   