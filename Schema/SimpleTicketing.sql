create database Ticketing;
use ticketing;

drop table if exists tickets;
create table tickets (
    ticketId int(11) AUTO_INCREMENT primary key,
    title varchar(512),
    description text,
    createdBy varchar(512),
    createdDate datetime default now(),
    requester varchar(512),
    requesterPhone varchar(25),
    requesterEmail varchar(512),
    isCustomer tinyint(1),
    isResolved tinyint(1),
    resolvedDate datetime
);

drop table if exists user;
create table user (
    userId int(11) AUTO_INCREMENT primary key,
    username varchar(256),
    password varchar(512)
);
insert into user (username, password) VALUES ('admin', '$2y$10$2e4PA8LteeZU0/tLdqQ/H.U.ltTa18TWpa4FTbM8YflWDZjvXpw.m');

