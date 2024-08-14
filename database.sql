create database if not exists crud1 default character set utf8 default collate utf8_general_ci;

use crud1;


CREATE TABLE cliente (
    id int primary key auto_increment,
    FName varchar(90) DEFAULT NULL,
    SecName varchar(90) DEFAULT NULL,
    Sexo varchar(1) DEFAULT NULL,
    Num_fi int(90) DEFAULT NULL,
    DataNasc date DEFAULT NULL,
    Email varchar(90) DEFAULT NULL,
    NIF varchar(90) DEFAULT NULL
) default charset = utf8;


INSERT INTO cliente (FName, SecName, Sexo, Num_fi, DataNasc, Email, NIF) VALUES
('Leo', 'Da Silva', 'M', 2, '2003-05-15', 'leodasilva@gmail.com', '12345667890');
COMMIT;




