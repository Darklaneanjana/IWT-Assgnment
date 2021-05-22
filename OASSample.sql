insert into users values('u0001','supun','chamod','1995-12-11','m',HASHBYTES('MD5','supun1234'));
insert into users values('u0002','kanaka','bashitha','1996-12-11','m',HASHBYTES('MD5','kanaka1234'));
insert into users values('u0003','sithum','ravishka','1998-12-11','m',HASHBYTES('MD5','sithum1234'));
insert into users values('u0004','anushka','udana','1997-12-11','m',HASHBYTES('MD5','anushka1234'));
insert into users values('u0005','malinda','perera','1998-12-11','m',HASHBYTES('MD5','malinda1234'));

insert into userContact values('u0003',0757623883);
insert into userContact values('u0004',0774985623);
insert into userContact values('u0005',0775896365);
insert into userContact values('u0002',0710789525);
insert into userContact values('u0001',0775869595);

insert into userEmail values('u0001','supuncmd123@gmail.com');
insert into userEmail values('u0002','kanaka123@gmail.com');
insert into userEmail values('u0003','sithum11@gmail.com');
insert into userEmail values('u0004','anushkaww12@gmail.com');
insert into userEmail values('u0005','malindamali@gmail.com');

insert into Dev values ('d0005','Lalith','Perera','m',HASHBYTES('MD5','Lalith1234'));
insert into Dev values ('d0001','saman','weerasinghe','m',HASHBYTES('MD5','saman1234'));
insert into Dev values ('d0002','Lasantha','desilva','m',HASHBYTES('MD5','Lasantha1234'));
insert into Dev values ('d0003','kamani','Perera','m',HASHBYTES('MD5','kamani1234'));
insert into Dev values ('d0004','kamal','piris','m',HASHBYTES('MD5','kamal1234'));

insert into DevContact values('d0005',0757895621);
insert into DevContact values('d0001',0778595856);
insert into DevContact values('d0002',0775845869);
insert into DevContact values('d0003',0758485921);
insert into DevContact values('d0004',0704285295);

insert into DevEmail values('d0005','lalith11@gmail.com');
insert into DevEmail values('d0001','samansaman@gmail.com');
insert into DevEmail values('d0002','lasantha11@gmail.com');
insert into DevEmail values('d0003','kamani12@gmail.com');
insert into DevEmail values('d0004','kamalkamal@gmail.com');

insert into App values('a0001', 'Fulte', 'this is Fulte', 'p', 1.0, '1.5v');
insert into App values('a0002','Ehelo','this is Ehelo','f',1.0,'2.5v');
insert into App values('a0003','Massgex','this is Massgex','p',1.0,'1.8v');
insert into App values('a0004','9gag','this is 9gag','p',1.0,'1.5v');
insert into App values('a0005','facebook','this is facebook','f',1.0,'5.5v');

insert into AppDownload values('a0005',20);
insert into AppDownload values('a0004',10);
insert into AppDownload values('a0003',30);
insert into AppDownload values('a0002',40);
insert into AppDownload values('a0001',80);


insert into Admin values('A0001','maalith','perera','maalith@gmail.com',HASHBYTES('MD5','maalith1234')); 
insert into Admin values('A0002','hemal','lasith','hemal@gmail.com',HASHBYTES('MD5','hemal1234'));
insert into Admin values('A0003','dinesh','chandimal','dinesh@gmail.com',HASHBYTES('MD5','dinesh1234')); 
insert into Admin values('A0004','lahiru','kumara','lahiru@gmail.com',HASHBYTES('MD5','lahiru1234'));
insert into Admin values('A0005','wanidu','hasaranga','wanidu@gmail.com',HASHBYTES('MD5','wanidu1234'));

insert into appSS values('a0001',1);
insert into appSS values('a0001',2);
insert into appSS values('a0003',3);
insert into appSS values('a0004',4);
insert into appSS values('a0005',5);

insert into appRate values('r0001','a0001','u0001','2021-11-11 13:23:44',5);
insert into appRate values('r0002','a0002','u0002','2021-11-12 13:23:44',5);
insert into appRate values('r0003','a0003','u0003','2021-11-13 13:23:44',5);
insert into appRate values('r0004','a0004','u0004','2021-11-14 13:23:44',5);
insert into appRate values('r0005','a0005','u0005','2021-11-15 13:23:44',5);

insert into appCmt values('c0001','a0003','u0005','2021-11-15 13:23:44','good app');
insert into appCmt values('c0002','a0001','u0004','2021-11-17 13:23:44','average');
insert into appCmt values('c0003','a0001','u0003','2021-11-18 13:23:44','nice');
insert into appCmt values('c0004','a0002','u0002','2021-11-19 13:23:44','nice');
insert into appCmt values('c0005','a0005','u0001','2021-11-20 13:23:44','heh');

insert into appRpt values('rp0004','a0002','u0001','2021-11-20 13:23:44','app is bad');
insert into appRpt values('rp0005','a0004','u0002','2021-11-21 13:23:44','app has malware');
insert into appRpt values('rp0002','a0005','u0002','2021-11-22 13:23:44','app is rot respoding');
insert into appRpt values('rp0003','a0004','u0003','2021-11-23 13:23:44','app is hateful');
insert into appRpt values('rp0001','a0001','u0005','2021-11-24 13:23:44','app is rasist');

insert into Category values('c001','Educationl');
insert into Category values('c002','lif3 Style');
insert into Category values('c003','cooking');
insert into Category values('c004','Music Player');
insert into Category values('c005','Camera');

insert into AppDev values('d0001','a0001');
insert into AppDev values('d0001','a0002');
insert into AppDev values('d0002','a0003');
insert into AppDev values('d0002','a0004');
insert into AppDev values('d0003','a0005');

insert into AppUser values('u0001','a0001');
insert into AppUser values('u0001','a0002');
insert into AppUser values('u0002','a0003');
insert into AppUser values('u0002','a0004');
insert into AppUser values('u0003','a0005');

insert into Payment values('p0001','u0001','a0001','2021-11-24 13:23:44',2.0,'card');
insert into Payment values('p0005','u0001','a0002','2021-11-25 13:23:44',1.0,'card');
insert into Payment values('p0002','u0005','a0001','2021-11-27 13:23:44',2.5,'card');
insert into Payment values('p0003','u0002','a0004','2021-11-28 13:23:44',10.0,'card');
insert into Payment values('p0004','u0005','a0003','2021-11-29 13:23:44',9.0,'card');



