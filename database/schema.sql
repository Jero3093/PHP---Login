CREATE DATABASE register-php;

CREATE TABLE signup (id INT(11) AUTO_INCREMENT, name VARCHAR(100), email VARCHAR(35), password VARCHAR(50));

CREATE TABLE contact (id INT(11) AUTO_INCREMENT, name VARCHAR(100), url VARCHAR(200), icon_url VARCHAR(100));

INSERT INTO contact (name, url, icon_url) VALUES ('name', 'url', 'icon_url');