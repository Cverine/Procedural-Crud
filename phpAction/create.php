<?php
require_once 'db_connect.php';

if ($_POST) {
    $name = mysqli_real_escape_string($connect, $_POST['name']);
    $salary = mysqli_real_escape_string($connect, $_POST['salary']);;
    $age = mysqli_real_escape_string($connect, $_POST['age']);

    $sql = "INSERT INTO $dbname (name, salary, age) VALUES ('$name', '$salary', '$age')";
    
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
