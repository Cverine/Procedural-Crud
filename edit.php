<?php

require_once 'phpAction/db_connect.php';

if ($_GET['id']) {
    $id = intval($_GET['id']);

    $sql = "SELECT * FROM $dbname WHERE id = {$id}";
    $result = $connect->query($sql);
    $data = $result->fetch_assoc();

    $connect->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Employee</title>
    <style type="text/css">
        fieldset {
            margin: auto;
            margin-top: 100px;
            width: 50%;
        }
 
        table tr th {
            padding-top: 20px;
        }
    </style>
</head>
<body>
<fieldset>
    <legend>Edit Employee</legend>

    <form action="phpAction/update.php" method="post">
        <table cellspacing="0" cellpadding="0">
            <tr>
                <th>Name</th>
                <td><input type="text" name="name" placeholder="name" value="<?php echo $data['name'] ?>"/></td>
            </tr>
            <tr>
                <th>Salary</th>
                <td><input type="text" name="salary" placeholder="salary" value="<?php echo $data['salary'] ?>"/></td>
            </tr>
            <tr>
                <th>Age</th>
                <td><input type="text" name="age" placeholder="age" value="<?php echo $data['age'] ?>"/></td>
            </tr>
            <tr>
                <input type="hidden" name="id" value="<?php echo $data['id']?>" />
                <td><button type="submit">Save Changes</button></td>
                <td><a href="index.php"><button type="button">Back</button></a></td>
            </tr>
        </table>
    </form>
</fieldset>
</body>
</html>

<?php
}
?>
