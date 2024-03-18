CREATE TABLE user (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(30) NOT NULL,
    password VARCHAR(50) NOT NULL
);

CREATE TABLE registration (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    image VARCHAR(255),
    fullname VARCHAR(50) NOT NULL,
    mobile VARCHAR(15),
    mail VARCHAR(50),
    username VARCHAR(30) NOT NULL,
    password VARCHAR(50) NOT NULL,
    cpassword VARCHAR(50) NOT NULL,
    outlet VARCHAR(50),
    role VARCHAR(30)
);

