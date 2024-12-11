<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Menu</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .menu {
            text-align: center;
        }
        h1 {
            margin-bottom: 20px;
        }
        a {
            display: inline-block;
            padding: 15px 30px;
            margin: 10px;
            text-decoration: none;
            color: white;
            background-color: #007bff;
            border-radius: 5px;
        }
        a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="menu">
        <h1>Main Menu</h1>
        <a href="students.php?page=students">Students Database</a>
        <a href="courses.php?page=courses">Courses Database</a>
        <a href="lecturers.php?page=lecturers">Lecturers Database</a>
    </div>

</body>
</html>
