

CREATE TABLE `merchant`.`pack_info` 
( `pack_id` INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
  `description` VARCHAR(200) NOT NULL , 
  `price` VARCHAR(50) NOT NULL ,
  `promo_price` VARCHAR(50) NOT NULL ,
  `expiration_type` VARCHAR(50) NOT NULL ,
  `expiration` VARCHAR(50) NOT NULL , 
  `unlimited_post` VARCHAR(50) NOT NULL ,
  `post_limit` INT(10) NOT NULL ,
  `sell_limit` INT(10) NOT NULL , 
  `status` VARCHAR(50) NOT NULL , 
  `title` VARCHAR(50) NOT NULL ) 
ENGINE = InnoDB;


CREATE TABLE `merchant`.`order_status`
( `order_id` INT(10) NOT NULL AUTO_INCREMENT , 
  `order_status` VARCHAR(50) NOT NULL , 
  `order_date` DATE NOT NULL , PRIMARY KEY (`order_id`)
  ) ENGINE = InnoDB;



CREATE TABLE `merchant`.`currency` 
(   `currency_id` INT(10) NOT NULL AUTO_INCREMENT , 
  `currency_code` VARCHAR(30) NOT NULL ,
  `currency_symbol` VARCHAR(30) NOT NULL ,
  `currency_date` DATE NOT NULL , PRIMARY KEY (`currency_id`)
  ) ENGINE = InnoDB;



CREATE TABLE `merchant`.`cuisine` 
( `cuisine_id` INT(10) NOT NULL AUTO_INCREMENT , 
  `cuisine_name` VARCHAR(50) NOT NULL , 
  `cuisine_date` VARCHAR(100) NOT NULL , PRIMARY KEY (`cuisine_id`)
  ) ENGINE = InnoDB;




CREATE TABLE `merchant`.`dishes` 
( `dishes_id` INT(10) NOT NULL AUTO_INCREMENT ,
 `dishes_name` VARCHAR(50) NOT NULL , 
 `dishes_icon` VARCHAR(200) NOT NULL ,
 `dishes_date` VARCHAR(100) NOT NULL , 
 PRIMARY KEY (`dishes_id`)
 ) ENGINE = InnoDB;
ALTER TABLE `dishes` ADD `dishes_status` VARCHAR(30) NOT NULL AFTER `dishes_icon`;


CREATE TABLE `merchant`.`commission` 
( `Commission_id` INT(10) NOT NULL AUTO_INCREMENT , 
  `admin_exclude_cod_balance` INT(5) NOT NULL DEFAULT '1' ,
  `admin_commission_enabled` VARCHAR(5) NOT NULL DEFAULT 'yes' , 
  `admin_disabled_membership_signup` INT(5) NOT NULL , 
  `admin_disabled_membership` INT(5) NOT NULL , 
  `total_commission_status` VARCHAR(200) NOT NULL ,
  `admin_include_merchant_cod` VARCHAR(5) NOT NULL ,
  `admin_commision_type` VARCHAR(10) NOT NULL , 
  `admin_commision_percent` INT(5) NOT NULL DEFAULT '2' ,
  `admin_commision_ontop` INT(5) NOT NULL DEFAULT '1' , 
  PRIMARY KEY (`Commission_id`)
  ) ENGINE = InnoDB;








