CREATE TABLE user (
    id int(8) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    email varchar(64) NOT NULL,
    name varchar(64) NOT NULL,
    pwd varchar(16) NOT NULL,
    hash varchar(32) NOT NULL,
    active boolean NOT NULL DEFAULT 0,
    firstname varchar(32),
    lastname varchar(32) 
);

INSERT INTO user (email, pwd) VALUES ();