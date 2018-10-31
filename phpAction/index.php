<?php
require_once 'phpAction/db_connect.php'
?>
<!DOCTYPE html>
<html>
<head>
    <title>Procedural CRUD</title>
</head>
<body>
    <div class="manageMember">
        <a href="create.php"><button>Create a new employee</button></a>
        <table>
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
echo $row['name'];
            if ($result->num_rows > 0) {
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
                echo "<tr><td colspan='5'><center>No Data Available</center></td></tr>";
            }
            ?>
        </tbody>    
        </table>
    </div>   
</body>
</html>


