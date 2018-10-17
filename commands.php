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


--crud operations


--read
SELECT * FROM table_name WHERE column1='some_text' ORDER BY column1 ASC;

--create
INSERT INTO table (col1,col2,col3) VALUES (val1,val2,val3);

--update
SET col1= 'this' , col2='that' WHERE id=1;

--delete
DELETE FROM  table_name WHERE id=1;



--example

INSERT INTO subjects (id,menu_name,position,visible) VALUES (1,'about globe bank',1 ,1);

SELECT * FROM subjects WHERE position=3 AND visible=1;

UPDATE subjects SET position='3' , visible='0' , WHERE id=3;

DELETE FROM subjects WHERE id=4 LIMIT 1;

--index

ADD INDEX index_name (column);



--conecting to php

<?php
$dbhost=""
$dbuser=""
$dbpassword=""
$dbname=""

mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname)

mysqli_close($connection)

?>