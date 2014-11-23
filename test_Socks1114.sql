drop table if exists test_socks;


create table test_Socks
( sockID int unsigned not null auto_increment primary key,
sockStyle varchar(50),
sockColor varchar(50),
Brand varchar(50),
);

insert into test_Socks values (NULL,"Crew","White","Hanes");
insert into test_Socks values (NULL,"Knee","Red","Merona");
insert into test_Socks values (NULL,"Athletic","Pink","Nike");
insert into test_Socks values (NULL,"Dress","Black","J.Crew");
insert into test_Socks values (NULL,"Ski","Brown","Smart Wool");

show create table test_Socks;

select * from test_Socks;
