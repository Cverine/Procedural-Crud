<?php

require_once 'db_connect.php';

if ($_POST) {
    $id = intval($_POST['id']);

    $sql = "DELETE FROM $dbname WHERE id = {$id}";
    if ($connect->query($sql) === true) {
        echo "<p>Successfully removed</p>";
         echo "<a href='../index.php'><button type='button'>Back</button></a>";
    } else {
        echo "Error updating record : " . $connect->error;
    }
 
    $connect->close();
}

?>
