<?php
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students Database</title>
    <style>
        
    </style>
</head>
<body>
    <h1>Students Database</h1>
    <div class="menu">
        <a href="add_students.php" style="text-decoration: none; background-color: #007bff; color: white; padding: 8px 12px; border-radius: 5px;">Add Students</a>
        <a href="index.php" style="text-decoration: none; background-color: #6c757d; color: white; padding: 8px 12px; border-radius: 5px;">Back to Main Menu</a>
    </div>

    <table>
        <tr>
            <th>SRN</th>
            <th>Name</th>
            <th>Majors</th>
            <th>Birth Place</th>
            <th>Birth Date</th>
            <th>Gender</th>
            <th>Phone Number</th>
            <th>Address</th>
            <th>Action</th>
        </tr>
        <?php
        $result_students = $conn->query("SELECT * FROM tb_students");
        if ($result_students->num_rows > 0) {
            while ($row = $result_students->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['srn']}</td>
                        <td>{$row['name']}</td>
                        <td>{$row['majors']}</td>
                        <td>{$row['birth_place']}</td>
                        <td>{$row['birth_date']}</td>
                        <td>{$row['gender']}</td>
                        <td>{$row['phone']}</td>
                        <td>{$row['address']}</td>
                        <td class='action-buttons'>
                        <a href='edit_students.php?srn={$row['srn']}' class='edit'>Edit</a>
                        <a href='delete_students.php?srn={$row['srn']}' class='delete' onclick=\"return confirm('Are you sure you want to delete this data?')\">Edit</a>
                        </td>
                    </tr>";
                
            }
        } else {
            echo "<tr><td colspan='9'>No student data</td></tr>";
        }
        ?>
    </table>

</body>
</html>

<?php
$conn->close ();
?>
