Create Database HospitalDB;

use HospitalDB;


create table roles(
	id int primary key auto_increment,
    role_name varchar(50)
);

create table Hospital(
	id int primary key auto_increment,
    role_id int,
    foreign key (role_id) references roles(id)
    
);

create table users(
	id int primary key auto_increment,
    user_name varchar(20),
    user_email varchar(200),
    user_password varchar(200),
    user_address varchar(500),
    role_id int,
    hospital_id int,
    foreign key (role_id) references roles(id),
    foreign key (hospital_id) references hospital(id)
);

create table appointment(
id int primary key auto_increment,
Full_Name  Varchar(20),
Contact int,
Choose_Hospital varchar(200)
);