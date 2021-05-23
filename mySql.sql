CREATE TABLE Category(
   	catID int(10) not null PRIMARY KEY AUTO_INCREMENT,
    catName varchar(50) not null,
    catSlug varchar(100)
    );
INSERT INTO `category`(`catName`) VALUES ('Educational');
	https://technosmarter.com/php/create-categories-in-blog-using-php-and-mysql
	
CREATE TABLE App(
   	AppID int(10) not null PRIMARY KEY AUTO_INCREMENT,
    appName varchar(100) not null,
    Description varchar(100) not null,
    price int(100) not null,
    appType varchar(1) not null,
    buildNo varchar(100) not null,
    devID int(10) not null,
    catID int(10) not null,
	seize int(10) not null,
    FOREIGN KEY (devID) REFERENCES Dev(devID),
    FOREIGN KEY (catID) REFERENCES category(catID)
    );

INSERT INTO `app`( `appName`, `Description`, `price`, `appType`, `buildNo`, `devID`, `catID`) VALUES ('pubg','this is pubg',4.4,'p','1.4v',1,1);


create table Dev(
    devID int(10) not null PRIMARY KEY AUTO_INCREMENT ,
    devName varchar(100) not null,
    DevPsw varchar(20) not null
    );

CREATE TABLE users(
UserID int(10) not null PRIMARY KEY AUTO_INCREMENT, 
uid varchar(30) not null, 
name varchar(30) not null, 
dob date ,
email varchar(30) not null, 
gender CHAR(1) NOT NULL,
userPsw varchar(20) not null
);

CREATE TABLE Appss(
AppID not null,
SS not null,
primary key(AppID,SS),
FOREIGN KEY (AppID) REFERENCES app(AppID)
);

create TABLE appdev(
    devID int(10) not null,
    AppID int(10) not null,
    primary key(devID,AppID),
	FOREIGN KEY (AppID) REFERENCES app(AppID),
    FOREIGN KEY (devID) REFERENCES dev(devID)
    );

CREATE TABLE admin(
 	AdminID int(10) not null PRIMARY KEY AUTO_INCREMENT,
    AID varchar(20) not null,
    aPsw varchar(20) not null
    );