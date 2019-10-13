CREATE TABLE users(
id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
username VARCHAR(100) NOT NULL,
email VARCHAR(255) NOT NULL,
PASSWORD VARCHAR(255) NOT NULL,
money INT DEFAULT 0,
user_type BOOLEAN);

CREATE TABLE moeshop(
item_id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
item_name VARCHAR(100),
item_date DATE,
item_price INT,
item_imgpath VARCHAR(200));

CREATE TABLE moemanga(
manga_id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
manga_users INT,
FOREIGN KEY (manga_users) REFERENCES users(id),
fullname VARCHAR(200),
penname VARCHAR(200),
author VARCHAR(10),
gender VARCHAR(10),
continent VARCHAR(20),
web_url VARCHAR(255),
titlekoma VARCHAR(50) NOT NULL,
firstkoma VARCHAR(255) NOT NULL,
secondkoma VARCHAR(255) NOT NULL,
thirdkoma VARCHAR(255) NOT NULL,
fourthkoma VARCHAR(255) NOT NULL,
komaimg MEDIUMBLOB,
komaimgpath VARCHAR(255)
);


DELIMITER $$

USE `moemoe`$$

DROP PROCEDURE IF EXISTS `topup`$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `topup`(idparam INT, moneyparam INT)
    DETERMINISTIC
BEGIN
	DECLARE moneynow INT;
	IF moneyparam > 0 THEN
	SELECT money INTO moneynow FROM users WHERE id = idparam;
	UPDATE users SET money = moneynow + moneyparam WHERE id = idparam;
	END IF;
    END$$

DELIMITER ;

DELIMITER $$

USE `moemoe`$$

DROP PROCEDURE IF EXISTS `buyitem`$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `buyitem`(idparam INT, itemidparam INT)
    DETERMINISTIC
BEGIN
	DECLARE itemprice INT;
	DECLARE usermoney INT;
	SELECT money INTO usermoney FROM users WHERE id = idparam;
	SELECT item_price INTO itemprice FROM moeshop WHERE item_id = itemidparam;
	
	IF usermoney >= itemprice THEN
	UPDATE users SET money = money - itemprice WHERE id = idparam;
	END IF;
    END$$

DELIMITER ;