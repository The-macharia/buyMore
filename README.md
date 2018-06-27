# buyMore
#### This is the Web Project for codeteam254
## To Use this on your local machines check the connection class on the core folder
Use the database credentials on the connection.php file as follows:
$pdo = new PDO('mysql:host=localhost;dbname=buyMore', 'root', ''); you can add optional port numbers and login credentials depending on your db
$pdo = new PDO('mysql:host=localhost:3306;dbname=buyMore', 'root', '') default Xammp settings

create a database call buymore and run the following queries
## Admin Table
CREATE TABLE `admin` (
  `adminID` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(45) DEFAULT NULL,
  `lastName` varchar(45) DEFAULT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `adminPic` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`adminID`),
  UNIQUE KEY `username_UNIQUE` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

##Men Products Table
CREATE TABLE `men_products` (
  `productID` int(11) NOT NULL AUTO_INCREMENT,
  `productName` varchar(45) NOT NULL,
  `productDescription` longtext,
  `price` double NOT NULL,
  `product_imagePath` varchar(255) DEFAULT NULL,
  `productQuantity` int(11) NOT NULL,
  `productCategory` varchar(45) NOT NULL,
  PRIMARY KEY (`productID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

### For Women and Children Products table just replace the `men_products` with `women_products` and `children_products` table

To Log in as an admin create a new user and insert directly to db
make sure to md5 your password using md5() function on php


