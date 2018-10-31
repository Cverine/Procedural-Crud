<?php
require_once 'phpAction/db_connect.php';
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
                    $sql = "SELECT * FROM employee";
                    $result = $connect->query($sql);

                    if($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>
                                <td>".$row['name']."</td>
                                <td>".$row['salary']."</td>
                                <td>".$row['age']."</td>
                                <td>
                                    <a href='edit.php?id=".$row['id']."'><button type='button'>Edit</button></a>
                                    <a href='remove.php?id=".$row['id']."'><button type='button'>Remove</button></a>
                                </td>
                            </tr>";
                }
            } else {
                echo "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
            }
            ?>
                </tbody>
            </table>
        </div>

</body>    
</html>    

