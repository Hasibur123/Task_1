Here are the steps to create a MySQL database and connect your PHP script to it:

Create a MySQL Database:
Log in to your MySQL server, either through command-line or a database management tool like phpMyAdmin, and create a new database for your project. Let's call it car_options.

CREATE DATABASE car_options;

Create a Table:
Inside the car_options database, create a table to store the form responses. Here's a sample SQL command:

CREATE TABLE responses (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    phone VARCHAR(15) NOT NULL,
    email VARCHAR(255) NOT NULL,
    address TEXT NOT NULL,
    car_options TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
