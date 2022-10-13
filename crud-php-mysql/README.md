# crud-php-mysql
tuto php base

Pour le script sql:
  - dans un terminal: 

```
mysq -u user -p
Enter Password:

CREATE DATABASE IF NOT EXISTS `crud_tutorial` CHARACTER SET utf8 COLLATE utf8_general_ci;

USE crud_tutorial;

CREATE TABLE  `customers` (
`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`name` VARCHAR( 100 ) NOT NULL ,
`email` VARCHAR( 100 ) NOT NULL ,
`mobile` VARCHAR( 100 ) NOT NULL
) ENGINE = INNODB;

```

## or

```
cd ./crud-php-mysql

mysq -u user -p
Enter Password:

SOURCE scripts.sql;

```

## for run 
```
php -S 127.0.0.1:7000
```

source:
  - https://www.startutorial.com/articles/view/php-crud-tutorial-part-1
