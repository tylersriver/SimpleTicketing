create database Ticketing;
use ticketing;

-- Tickets Table
drop table if exists tickets;
create table tickets (
    ticketId int(11) AUTO_INCREMENT primary key,
    title varchar(512),
    description text,
    createdBy int(11),
    createdDate datetime default now(),
    requester varchar(512),
    requesterPhone varchar(25),
    requesterEmail varchar(512),
    isCustomer tinyint(1),
    isResolved tinyint(1),
    resolvedDate datetime
);

-- User table
drop table if exists user;
create table user (
    userId int(11) AUTO_INCREMENT primary key,
    username varchar(256),
    firstName varchar(512),
    lastName varchar(512),
    email varchar(512),
    password varchar(512)
);
insert into user (username, firstName, lastName, email, password) VALUES ('admin', 'Tyler', 'Sriver', 'tylersriver@gmail.com', '$2y$10$2e4PA8LteeZU0/tLdqQ/H.U.ltTa18TWpa4FTbM8YflWDZjvXpw.m');

-- Customers Table
drop table if exists customers;
create table customers (
    customerId int(11) AUTO_INCREMENT primary key,
    firstName varchar(512),
    lastName varchar(512),
    email varchar(512)
);