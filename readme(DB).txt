//run this part of code as "query" in mysql workbench




create  database donet;
use donet;
create table Donor(name varchar(50) NOT NULL,
 email varchar(50)  not null unique,
 contact_no varchar(10) not null,
 address varchar(100),
 pass varchar(45) not null,
 primary key (email,contact_no)
);

create table Book
(
name varchar(60) NOT NULL,
email varchar(50),
category  varchar(45),
quantity int not null,
bookid int primary key auto_increment,
foreign key(email) references donor(email));

create table Cloth(
category varchar(50) not null,
email  varchar(50) NOT NULL UNIQUE,
quantity int,
clothid int primary key not null auto_increment,
foreign key(email) references donor(email));

create table Donate(
item int,
email varchar(50),
foreign key(email) references Donor(email),
clothID int,
 foreign key(clothID) references Cloth(clothID),
bookID int,
 foreign key(bookID) references Book(bookID));
 
 create table NGO
(
name varchar(50) not null,
regID int not null,
contact_no varchar(10) not null unique,
address varchar(100),
email varchar(45),
pass varchar(45),
primary key(contact_no,regID));

create table Order_(
order_no int primary key not null auto_increment);
 
 create table request(
 reqID int primary key auto_increment,
 item varchar(45),
 quantity int not null,
 regID int not null);



 




