<?php

require_once 'phpAction/db_connect.php';

if  ($_GET['id']) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM employee WHERE id = {$id}";
    $result = $connect->query($sql);
    $data = $result->fetch_assoc();

    $connect->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Remove employee</title>
</head>
<body>
<p>Do you really want to remove ?</p>
    <form action="phpAction/remove.php" method="post">
        <input type="hidden" name="id" value="<?php echo $data['id'] ?>" />
        <button type="submit">Remove</button>
        <a href="index.php"><button type="button">Back</button></a>
    </form>    
</body>
</html>    

<?php
}
?>
