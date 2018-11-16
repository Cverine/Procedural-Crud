<?php

require_once 'db_connect.php';

if ($_POST) {
    $name = mysqli_real_escape_string($connect, $_POST['name']);
    $salary = mysqli_real_escape_string($connect, $_POST['salary']);;
    $age = mysqli_real_escape_string($connect, $_POST['age']);
    $id = intval($_POST['id']);

    $sql = "UPDATE $dbname SET name='$name', salary='$salary', age='$age' WHERE id = {$id}";
    if ($connect->query($sql) === true) {
        $success = "Employee successfully updated !!";
    } else {
        echo "Error while updating record : ". $connect->error;
    }
 
    $connect->close();
 
}
 
?>

<!DOCTYPE html>
<html>
<head>
    <title>Employee updated</title>
    <style type="text/css">
        .manageMember {
            width: 50%;
            margin: auto;
        }
        table {
            width: 100%;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="manageMember">
        <p><?php echo $success ?></p>
        <a href='../edit.php?id=<?php echo $id ?>'><button type='button'>Back</button></a>
        <a href='../index.php'><button type='button'>Home</button></a>
    </div>
</body>
</html>