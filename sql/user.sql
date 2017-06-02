CREATE TABLE user (
    id int(8) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    email varchar(64) NOT NULL,
    name varchar(64) NOT NULL,
    pwd varchar(16) NOT NULL
);

INSERT INTO user (email, pwd) VALUES ();