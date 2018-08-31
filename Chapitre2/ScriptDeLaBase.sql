CREATE DATABASE IF NOT EXISTS `EErevision` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `EErevision`;


CREATE TABLE IF NOT EXISTS Tbl_Users (
id_User INTEGER,
surname VARCHAR(30) NOT NULL,
nameUser VARCHAR(30) NOT NULL,
login VARCHAR(30) NOT NULL,
passwordUser VARCHAR(30) NOT NULL,
CONSTRAINT Pk_Tbl_Users PRIMARY KEY(id_User)
)ENGINE=innodb, CHARACTER SET=latin1;

CREATE TABLE IF NOT EXISTS Tbl_News (
id_News INTEGER,
title VARCHAR(30) NOT NULL,
description VARCHAR(30) NOT NULL,
CONSTRAINT Pk_Tbl_News PRIMARY KEY(id_News),
CONSTRAINT Fk_Tbl_Users_News_id_User FOREIGN KEY(id_User) REFERENCES Tbl_Users(id_User)
)ENGINE=innodb, CHARACTER SET=latin1;