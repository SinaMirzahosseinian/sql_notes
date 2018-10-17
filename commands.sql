-- command and tricks / personal notes



--commands

CREATE DATABASES db_name;

USE db_name;

DROP DATABASES db_name;

GRANT ALL PRIVILEGES ON  db_name.* TO 'username'@'ip address' IDENTIFIED BY 'password';

CREATE TABLE table_name (
    column_name1 definitions,
    column_name2 definitions,
    column_name3 definitions,
    column_name4 definitions,
    options
);


SHOW DATABASE;
SHOW TABLES;
SHOW CALUMNS FROM table_name;

DROP DATABASE db_name;
DROP TABLE db_name;


--example

CREATE TABLE subjects (
    id INT(11) NOT NULL AUTO_INCREMENT,
    menu_name VARCHAR(255),
    position INT(3),
    visible TINYINT(1),
    PRIMARY KEY (id)
);