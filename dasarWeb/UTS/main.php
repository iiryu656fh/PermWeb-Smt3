<?php 
session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Halaman Utama</title>
</head>
<body>
    <div class="container-fluid p-5 bg-primary text-white text-center">
        <h1>About Me</h1>
        <p>Welcome to my daily diary application.</p>
    </div>
    <div class="container mt-5">
        <h2>Your Diary</h2>
        <a href="add_diary.php" class="btn btn-primary mb-3">Add Diary Entry</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Entry</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (isset($_COOKIE['diaryEntries'])) {
                    $entries = json_decode($_COOKIE['diaryEntries'], true);
                    foreach ($entries as $date => $entry) {
                        echo "<tr>
                                <td>$date</td>
                                <td>$entry</td>
                                <td><a href='delete.php?date=$date' class='btn btn-danger'>Delete</a></td>
                              </tr>";
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
    <script src="bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
