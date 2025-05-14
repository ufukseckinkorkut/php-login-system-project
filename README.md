# php-login-system-project
I am learning PHP and this is one of the first projects I made. 
It's a login page which leads you to the logged in page if the login infos are true, or if you don't have an account you basically create an account from the register page. 
I used basic PHP codes and mysql database connection. It's been a good practice to revise the things that i've learned so far. 


💾 Database Info:

    Database System: MySQL via XAMPP

    Database Name: testdb

    Users Table Schema:

Column	Type	Description
id	INT	Auto-incremented primary key
username	VARCHAR(255)	Username of the user
password	VARCHAR(255)	Plain-text password (for demo purposes only)

🛠️ To create the users table, use the following SQL command:

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL
);
