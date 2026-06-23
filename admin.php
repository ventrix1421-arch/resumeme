<?php

include "api/db.php";

$result = $conn->query("
SELECT *
FROM resumes
ORDER BY id DESC
");

?>

<!DOCTYPE html>

<html>

<head>

    <title>Admin</title>

    <style>
        table {

            border-collapse: collapse;

            width: 100%;

        }

        td,
        th {

            border: 1px solid #ccc;

            padding: 10px;

        }
    </style>

</head>

<body>

    <h2>Saved Resumes</h2>

    <table>

        <tr>

            <th>ID</th>

            <th>Name</th>

            <th>Role</th>

            <th>Email</th>

            <th>Phone</th>

            <th>Location</th>

            <th>Date</th>

        </tr>

        <?php

        while ($row = $result->fetch_assoc()) {

            ?>

            <tr>

                <td><?= $row['id'] ?></td>

                <td><?= $row['fullname'] ?></td>

                <td><?= $row['role'] ?></td>

                <td><?= $row['email'] ?></td>

                <td><?= $row['phone'] ?></td>

                <td><?= $row['location'] ?></td>

                <td><?= $row['created_at'] ?></td>

            </tr>

            <?php

        }

        ?>

    </table>

</body>

</html>