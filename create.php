<!DOCTYPE html>
<html>
<head>
    <title>Add Employee</title>
</head>
<body>
    <fieldset>
    <legend>Add Member</legend>
 
    <form action="phpAction/create.php" method="post">
        <table cellspacing="0" cellpadding="0">
            <tr>
                <th>Name</th>
                <td><input type="text" name="name" placeholder="Name" /></td>
            </tr>     
            <tr>
                <th>Salary</th>
                <td><input type="text" name="salary" placeholder="Salary" /></td>
            </tr>
            <tr>
                <th>Age</th>
                <td><input type="text" name="age" placeholder="Age" /></td>
            </tr>
            <tr>
                <td><button type="submit">Save Changes</button></td>
                <td><a href="index.php"><button type="button">Back</button></a></td>
            </tr>
        </table>
    </form>
 
</fieldset>
</body>
</html>
