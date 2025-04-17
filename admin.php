<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">Admin Dashboard</a>
    </div>
  </nav>

  <div class="container mt-5">
    <h2 class="mb-4">Student Submissions</h2>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Name</th>
          <th>Registration Number</th>
          <th>File</th>
          <th>Submission Time</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $stmt = $conn->query("SELECT * FROM assignments ORDER BY submission_time DESC");
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>
                    <td>{$row['student_name']}</td>
                    <td>{$row['reg_number']}</td>
                    <td><a href='{$row['file_name']}' target='_blank'>Download File</a></td>
                    <td>{$row['submission_time']}</td>
                  </tr>";
        }
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>