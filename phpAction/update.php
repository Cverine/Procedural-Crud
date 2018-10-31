<?php

require_once 'db_connect.php';

if ($_POST) {
    $name = $_POST['name'];
    $salary = $_POST['salary'];
    $age = $_POST['age'];
    $id = $_POST['id'];

    $sql = "UPDATE employee SET name='$name', salary='$salary', age='$age' WHERE id = {$id}";
    if ($connect->query($sql) === true) {
        echo "<p>Succcessfully Updated</p>";
        echo "<a href='../edit.php?id=".$id."'><button type='button'>Back</button></a>";
        echo "<a href='../index.php'><button type='button'>Home</button></a>";
    } else {
        echo "Error while updating record : ". $connect->error;
    }
 
    $connect->close();
 
}
 
?>
