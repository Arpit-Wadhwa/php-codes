CREATE DATABASE student_db;

USE student_db;

CREATE TABLE students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    class VARCHAR(10),
    semester INT,
    gender VARCHAR(10),
    mobile VARCHAR(15)
);
