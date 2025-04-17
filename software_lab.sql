CREATE DATABASE software_lab;

USE software_lab;

CREATE TABLE assignments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    student_name VARCHAR(255) NOT NULL,
    reg_number VARCHAR(255) NOT NULL,
    file_name VARCHAR(255) NOT NULL,
    submission_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);