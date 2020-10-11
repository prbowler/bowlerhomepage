CREATE TABLE Category (
ID SERIAL PRIMARY KEY,
Name VARCHAR(50)
);

CREATE TABLE Items (
ID SERIAL PRIMARY KEY,
Name VARCHAR(50) NOT NULL,
Discription VARCHAR(80) NOT NULL,
Price INT NOT NULL,
Stock INT,
CategoryID INT references Category(ID),
Image VARCHAR(50)
);

CREATE TABLE Shopper (
ID SERIAL PRIMARY KEY,
username VARCHAR(50) NOT NULL,
FirstName VARCHAR(50),
LastName VARCHAR(50),
Email VARCHAR(50),
Password VARCHAR(50)
);

CREATE TABLE Cart (
ID SERIAL PRIMARY KEY,
ItemID INT references Item(ID),
Quantity INT NOT NULL,
ShopperID INT references Shopper(ID)
);

CREATE TABLE Card (
ID SERIAL PRIMARY KEY,
Number VARCHAR(50) NOT NULL,
ShopperID INT references Shopper(ID)
);

CREATE TABLE Checkout (
ID SERIAL PRIMARY KEY,
CartID INT references Cart(ID)
);


