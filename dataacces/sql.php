DROP DATABASE IF EXISTS DwpDB;
CREATE DATABASE DwpDB;

USE DwpDB;

DROP TABLE IF EXISTS PostalCode;
DROP TABLE IF EXISTS Adress;
DROP TABLE IF EXISTS UserNotification;
DROP TABLE IF EXISTS UserProfile;
DROP TABLE IF EXISTS ProductCategory;
DROP TABLE IF EXISTS Product;
DROP TABLE IF EXISTS Ordering;
DROP TABLE IF EXISTS ProductOrder;

CREATE TABLE PostalCode
(
    PostalCodeID INT(50) NOT NULL PRIMARY KEY,
    City VARCHAR(100)
)   Engine=InnoDB;

CREATE TABLE Adress
(
    AdressID INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    StreetName VARCHAR(100),
    HouseNumber VARCHAR(50),
    PostalCodeID INT,
    FOREIGN KEY (PostalCodeID) REFERENCES PostalCode (PostalCodeID)
)   Engine=InnoDB;

CREATE TABLE UserNotification
(
    UserNotificationID INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    Eventtype VARCHAR(50),
    Calendar INT(10),
    PhoneNumber VARCHAR(20)
)   Engine=InnoDB;

CREATE TABLE UserProfile
(
    UserID INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    FullName VARCHAR(255),
    UserPassword VARCHAR(255),
    Usertype VARCHAR(255),
    Email VARCHAR(255),
    AdressID INT,
    UserNotificationID INT,
    FOREIGN KEY (AdressID) REFERENCES Adress (AdressID),
    FOREIGN KEY (UserNotificationID) REFERENCES UserNotification (UserNotificationID)
)   Engine=InnoDB;

CREATE TABLE ProductCategory
(
    CategoryID INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    ProductName VARCHAR(100)
)   Engine=InnoDB;

CREATE TABLE Product
(
    ProductID INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    ProductName VARCHAR(255),
    ProductDescription TEXT(3000),
    Price DECIMAL(7,2),
    ProductStatus VARCHAR(50),
    CategoryID INT,
    FOREIGN KEY (CategoryID) REFERENCES ProductCategory (CategoryID)
)   Engine=InnoDB;

CREATE TABLE Ordering
(
    OrderID INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    Payment VARCHAR(255),
    DeleveringStatus VARCHAR(255),
    UserID INT,
     AdressID INT,
    FOREIGN KEY (UserID) REFERENCES UserProfile (UserID),
    FOREIGN KEY (AdressID) REFERENCES Adress (AdressID)
)   Engine=InnoDB;

CREATE TABLE ProductOrder
(
    ProductID INT NOT NULL,
    OrderID INT NOT NULL,
    CONSTRAINT ProductOrderPK PRIMARY KEY (ProductID, OrderID),
    FOREIGN KEY (ProductID) REFERENCES Product (ProductID)
)   Engine=InnoDB;

