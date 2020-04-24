Create database myDatabase;
 
Grant all on myDatabase.* to testuser@localhost identified by 'password';

use myDatabase; 

drop table Product;

create table Product (
product_ID int,
product_name varchar(100),
product_type varchar(100),
product_Ver varchar(100),
product_price float,
serial_num int, 
product_image varchar(100)
);

insert into Product (product_name,product_type,product_ID,product_Ver,product_price,serial_num, product_image)
values('Corsair Vengeance','Ram',1001,'18gb',113.99,1001, '1.jpg');

insert into Product (product_name,product_type,product_ID,product_Ver,product_price,serial_num, product_image)
values('Timetec Hynix IC Kit','Ram',1002,'18gb',84.99,2002, '2.jpg');

insert into Product (product_name,product_type,product_ID,product_Ver,product_price,serial_num, product_image)
values('ASUS ROG Strix Gaming AMD','Motherboard','1003,B305-F',150.50,3003, '3.png');

insert into Product (product_name,product_type,product_ID,product_Ver,product_price,serial_num, product_image)
values('MSI B360 Gaming Plus ATX Intel Coffee Lake Motherboard','Motherboard',1004,'LGA 1151',130.99,4004, '4.jpg');

insert into Product (product_name,product_type,product_ID,product_Ver,product_price,serial_num, product_image)
values('Intel Core i7-8700K Desktop Processor 6 Cores','CPU',1005,'3.7GHz Turbo',500.99,5005, '5.jpg');

insert into Product (product_name,product_type,product_ID,product_Ver,product_price,serial_num, product_image)
values('AMD YD2600BBAFBOX Processeur RYZEN5 2600 Socket AM4 3.9Ghz Max Boost','CPU',1006,' AM4 3.9Ghz Max Boost',244.99,6006, '6.png');

insert into Product (product_name,product_type,product_ID,product_Ver,product_price,serial_num, product_image)
values('MSI Gaming GeForce GTX 1660 Ti 192-bit HDMI/DP Support DirectX ','Video Card',1007,'6GB GDRR6 HDCP',400.99,7007, '7.jpg');

insert into Product (product_name,product_type,product_ID,product_Ver,product_price,serial_num, product_image)
values('EVGA GeForce GTX 1070 Ti SC GAMING ACX ','Video Card',1008,'3.0 Black Edition',744.99,8008, '8.jpg');

insert into Product (product_name,product_type,product_ID,product_Ver,product_price,serial_num, product_image)
values('EVGA 650 GQ, 80+ Gold 650W, Semi Modular,5 Year Warranty, Power Supply ','Power Supply',1009,' EVGA ECO Mode',101.99,9009, '9.jpg');

insert into Product (product_name,product_type,product_ID,product_Ver,product_price,serial_num, product_image)
values('Corsair CP-9020179-NA RMX Series RM750x 80 Plus Gold Fully Modular ATX Power Supply ','Power supply',10010,'RMX Series RM750x',140.99,10010, '1.jpg');

DELETE from Product where product_name='MSI Gaming GeForce GTX 1660 Ti 192-bit HDMI/DP 6GB GDRR6 HDCP Support DirectX ';