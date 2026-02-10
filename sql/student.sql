CREATE DATABASE IF NOT EXISTS php1;
USE php1;

CREATE TABLE students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100),
    age INT
);

INSERT INTO students (name, email, age) VALUES
('Rahul Sharma', 'rahul@gmail.com', 22),
('Amit Verma', 'amit@gmail.com', 23);
