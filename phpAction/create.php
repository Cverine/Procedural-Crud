<?php
require_once 'db_connect.php';

if ($_POST) {
    $name = $_POST['name'];
    $salary = $_POST['salary'];
    $age = $_POST['age'];

    $sql = "INSERT INTO employee (name, salary, age) VALUES ('$name', '$salary', '$age')";
    
    if ($connect->query($sql) === true) {
        echo "<p>Employee successfully created</p>";
        echo "<a href='../create.php'><button type='button'>Back</button></a>";
        echo "<a href='../index.php'><button type='button'>Home</button></a>";
    } else {
        echo "Error " . $sql . ' ' . $connect->connect_error;
    }

    $connect->close();
}

?>
