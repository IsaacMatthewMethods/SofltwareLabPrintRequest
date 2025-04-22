<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document Printing - Easy and Affordable</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="styles.css" rel="stylesheet">
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">Software Lab</a>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="hero-section text-center text-white">
    <div class="container">
      <h1 class="display-4">SOFTWARE LAB</h1>
      <p class="lead">Free Resources for Students</p>
      <a href="cssl42:8080" class="btn btn-success btn-lg">Free Resources</a>
    </div>
  </section>

  <!-- Assignment Submission Form -->
  <section class="form-section py-5">
    <div class="container">
      <h2 class="text-center mb-4">Submit Your Document for Printing</h2>
      <form action="submit.php" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
          <label for="studentName" class="form-label">Name</label>
          <input type="text" class="form-control" id="studentName" name="studentName" required>
        </div>
        <div class="mb-3">
          <label for="fileUpload" class="form-label">Upload Document</label>
          <input type="file" class="form-control" id="fileUpload" name="fileUpload" accept=".zip,.pdf,.docx,.ppt,.xlsx" required>
        </div>
        <button type="submit" class="btn btn-success">send</button>
      </form>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer bg-dark text-white text-center py-3">
    <div class="container">
      <p>&copy; 2023 Software Lab. All rights reserved.</p>
    </div>
  </footer>
</body>
</html>