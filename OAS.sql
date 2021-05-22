CREATE TABLE users(
UserID char(10) not null, 
firstName varchar(30) not null, 
lastName varchar (30 ) NOT NULL, 
dob date ,
gender CHAR(1) NOT NULL,
userPsw binary(16) not null,
CONSTRAINT PKusers PRIMARY KEY (UserID),
CONSTRAINT checkUserID check (UserID LIKE'[u\U][0-9][0-9][0-9][0-9]'));

CREATE TABLE userContact( 
UserID char(10) not null,
pNumber int,
CONSTRAINT PKuserContact PRIMARY KEY (UserID,pNumber), 
CONSTRAINT FKuserContactUserID FOREIGN KEY (UserID) REFERENCES users(UserID),
CONSTRAINT checkConUserpNumber check (pNumber BETWEEN 0000000000 AND 9999999999));

CREATE TABLE userEmail( 
UserID char(10) not null ,
Email varchar(50) NOT NULL,
CONSTRAINT PKUserEmail PRIMARY KEY (UserID,Email),
CONSTRAINT FKUserEmailUserID FOREIGN KEY (UserID) REFERENCES users(UserID),
CONSTRAINT checkEmEmail check(Email LIKE'%@%.%'));

CREATE TABLE Dev(
DevID char(10) not null, 
firstName varchar(30) not null, 
lastName varchar (30 ) NOT NULL, 
Gender CHAR(1) NOT NULL,
DevPsw binary(16) not null,
PRIMARY KEY (DevID),
CONSTRAINT checkDevID check (DevID LIKE'[d\D][0-9][0-9][0-9][0-9]'));

CREATE TABLE DevContact( 
DevID char(10) not null,
pNumber int,
CONSTRAINT PKDevContact PRIMARY KEY (DevID,pNumber), 
CONSTRAINT FKDevContact FOREIGN KEY (DevID) REFERENCES Dev(DevID),
CONSTRAINT checkConDevpNumber check (pNumber BETWEEN 0000000000 AND 9999999999));

CREATE TABLE DevEmail( 
DevID char(10) not null ,
Email varchar(50) NOT NULL,
CONSTRAINT PKDevEmail PRIMARY KEY (DevID,Email),
CONSTRAINT FKDevEmail FOREIGN KEY (DevID) REFERENCES Dev(DevID),
CONSTRAINT checkDevEmail check(Email LIKE'%@%.%'));

CREATE TABLE App(
AppID char(10) not null, 
appName varchar(30) not null, 
Description varchar(400) not null,
appType char(1) not null,
price float not null,
buildNo VARCHAR(10) not null,
CONSTRAINT PKApp PRIMARY KEY(AppID),
CONSTRAINT checkApp_AppID check (AppID LIKE'[a\A][0-9][0-9][0-9][0-9]'),
CONSTRAINT checkApp_AppType check (appType LIKE'[pfr]'));

CREATE TABLE AppDownload(
AppID char(10) not null, 
downloads INT not null,
CONSTRAINT PKAppDown PRIMARY KEY(AppID),
CONSTRAINT FKAppDown FOREIGN KEY(AppID) references App(AppID));

create table Admin(
    AdminID char(10) not null, 
    firstName VARCHAR(30) not null,
    lastName VARCHAR(30) not null,
    email VARCHAR(30) not null,
    AdminPsw binary(16) not null,
    CONSTRAINT PKAdmin PRIMARY KEY(AdminID),
);

CREATE TABLE AppSS(    --screnshots
AppID char(10) not null, 
ss int not null,
CONSTRAINT PKAppSS PRIMARY KEY(AppID,ss),
CONSTRAINT FKAppSSAppID FOREIGN KEY (AppID) REFERENCES App(AppID),
);

CREATE TABLE appRate(
RID VARCHAR(10) not null,
AppID char(10) not null, 
UserID char(10) not null, 
Rdatetime DATETIME not null, 
Rammount int not null,
CONSTRAINT PKAppRate PRIMARY KEY (RID),
CONSTRAINT FKAppRateAppID FOREIGN KEY (AppID) REFERENCES App(AppID),
CONSTRAINT FKAppRateUserID FOREIGN KEY (UserID) REFERENCES users(UserID),
CONSTRAINT checkRid check(RID LIKE'[r\R][0-9][0-9][0-9][0-9]'));

CREATE TABLE appCmt( --comment
CmtID char(10) not null,
AppID char(10) not null, 
UserID char(10) not null, 
Cdatetime DATETIME not null, 
comment VARCHAR(100) not null,
CONSTRAINT PKAppCmt PRIMARY KEY (CmtID),
CONSTRAINT FKAppCmtAppID FOREIGN KEY (AppID) REFERENCES App(AppID),
CONSTRAINT FKAppCmtUserID FOREIGN KEY (UserID) REFERENCES users(UserID),
CONSTRAINT checkAppCmt check(CmtID LIKE'[c\C][0-9][0-9][0-9][0-9]'));

CREATE TABLE appRpt(  --report app
RptID char(10) not null, 
AppID char(10) not null, 
UserID char(10) not null, 
RptDatetime DATETIME not null, 
Comment VARCHAR(200) not null,
CONSTRAINT PKRptID PRIMARY KEY (RptID),
CONSTRAINT FKappRptAppID FOREIGN KEY (AppID) REFERENCES App(AppID),
CONSTRAINT FKappRptUserID FOREIGN KEY (UserID) REFERENCES users(UserID),
CONSTRAINT checkAppRpt check(RptID LIKE'rp[0-9][0-9][0-9][0-9]'));

CREATE TABLE Category(
catID char(10) not null, 
catName char(20) not null,
CONSTRAINT PKCat PRIMARY KEY(catID),
CONSTRAINT checkCat_CatID check (catID LIKE'[c\C][0-9][0-9][0-9]'));

CREATE TABLE AppDev(
DevID char(10) not null, 
AppID char(10) not null,
CONSTRAINT PKAppDev PRIMARY KEY(DevID,AppID),
CONSTRAINT FKAppDevAppID FOREIGN KEY (AppID) REFERENCES App(AppID),
CONSTRAINT FKAppDevDevID FOREIGN KEY (DevID) REFERENCES Dev(DevID));

CREATE TABLE AppUser(
UserID char(10) not null, 
AppID char(10) not null,
CONSTRAINT PKAppUser PRIMARY KEY(UserID,AppID),
CONSTRAINT FKAppUserAppID FOREIGN KEY (AppID) REFERENCES App(AppID),
CONSTRAINT FKAppUserUserID FOREIGN KEY (UserID) REFERENCES users(UserID));

CREATE TABLE Payment(
PayID char(10) not null, 
UserID char(10) not null,
AppID char(10) not null,
PDatetime DATETIME not null, 
PAmmount float not null,
pType char(10) not null,
CONSTRAINT PKPayID PRIMARY KEY (PayID),
CONSTRAINT FKPayUserID FOREIGN KEY (UserID) REFERENCES users(UserID),
CONSTRAINT FKPayAppID FOREIGN KEY (AppID) REFERENCES App(AppID)
);
