<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $studentName = $_POST['studentName'];
    $regNumber = $_POST['regNumber'];

    // Handle file upload
    if (isset($_FILES['fileUpload']) && $_FILES['fileUpload']['error'] === UPLOAD_ERR_OK) {
        $uploadDir = 'uploads/';
        $fileName = basename($_FILES['fileUpload']['name']);
        $filePath = $uploadDir . uniqid() . '_' . $fileName;

        if (move_uploaded_file($_FILES['fileUpload']['tmp_name'], $filePath)) {
            // Insert into database
            $stmt = $conn->prepare("INSERT INTO assignments (student_name, reg_number, file_name) VALUES (:studentName, :regNumber, :fileName)");
            $stmt->bindParam(':studentName', $studentName);
            $stmt->bindParam(':regNumber', $regNumber);
            $stmt->bindParam(':fileName', $filePath);

            if ($stmt->execute()) {
                echo "<script>alert('Documents submitted successfully!'); window.location.href = 'index.php';</script>";
            } else {
                echo "<script>alert('Error submitting assignment.'); window.location.href = 'index.php';</script>";
            }
        } else {
            echo "<script>alert('Error uploading file.');</script>";
        }
    } else {
        echo "<script>alert('No file uploaded.'); window.location.href = 'index.php';</script>";
    }
}
?>