#!/bin/bash

service mysql start 

mysql --user=root --password="m0onqwedqdwshiqeqiicxq" -e " \
        CREATE DATABASE web;
        USE web;

        CREATE TABLE users(user_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY, username TEXT, password TEXT);
        CREATE TABLE flag(flag TEXT);
        CREATE USER 'web'@'localhost' IDENTIFIED BY 'm0onqwxasodqwdshiqwdqmaxa';


        GRANT SELECT,INSERT ON web.users TO 'web'@'localhost';

        GRANT SELECT ON web.flag TO 'web'@'localhost';

        INSERT INTO web.users (username, password) VALUES ('admin', 'qonzxcbasidqwe2@#!SDS!@!');
        INSERT INTO web.flag(flag) VALUES('ctf{Novic3???no!!!Gre4t_H4cker!!!}');"
