<?php
require_once 'phpAction/db_connect.php';

$sql = "SELECT * FROM $dbname";
$result = $connect->query($sql);
$count = $result->num_rows;
$i = 1;

?>
<!DOCTYPE html>
<html>
<head>
    <title>Procedural Crud</title>
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
    <a href="create.php"><button>Add Employee</button></a>
    <table border="1" cellspacing="0" cellpadding="0">
        <thead>
        <tr>
            <th>Name</th>
            <th>Salary</th>
            <th>Age</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php
        if ($count > 0) {
            while ($row = $result->fetch_assoc()):
                ?>
                <tr>
                    <td><?php echo $row['name'] ?></td>
                    <td><?php echo $row['salary'] ?></td>
                    <td><?php echo $row['age'] ?></td>
                    <td>
                        <a href='edit.php?id=<?php echo $row['id'] ?>'><button type='button'>Edit</button></a>
                        <a href='remove.php?id=<?php echo $row['id'] ?>'><button type='button'>Remove</button></a>
                    </td>
                </tr>
                <?php
                $i++;
            endwhile;
        }
        ?>
        </tbody>
    </table>
</div>
</body>
</html>    

