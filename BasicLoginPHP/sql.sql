CREATE DATABASE LOGINEXAMPLE;
USE LOGINEXAMPLE;

CREATE TABLE USERS(
    password varchar(128) not null,
    user varchar(64) primary key
)ENGINE=InnoDB;

insert into users values ('7110eda4d09e062aa5e4a390b0a572ac0d2c0220','Anytown');

/*
Example:
User: Anytown
Password: 1234
*/