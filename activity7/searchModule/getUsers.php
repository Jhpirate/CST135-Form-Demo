<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>Login Response</title>
</head>
<body>

<table>
    <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
    </tr>
    <?php
    $users = getAllUsers();

    for ($x = 0;$x < count($users);$x++)
    {
        echo "<tr>";
    echo "<td>" . $users[$x][0] . "</td>" . "<td>" . $users[$x][1] . "</td>" . "</td>" . "<td>" . $users[$x][2] . "</td>";
    echo "</tr>";
    }
    ?>
</table>

</body>
</html>