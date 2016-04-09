set search_path = "CSI2132 Project";

create table Account
(
user_id varchar(20) primary key,
password varchar(50),
last_name varchar(20),
first_name varchar(20),
email varchar(40),
city varchar(20),
province varchar(20),
country varchar(20)
);

create table Profile
(
user_id varchar(20) primary key,
age_range varchar(20),
year_born int,
gender char(1),
occupation varchar(50),
device_used varchar(20),
foreign key(user_id) references Account,
constraint profile_gender check (gender in('M','F','O'))
);

create table Topics
(
topic_id char(3) primary key,
description varchar(20)
);

create table Movie
(
movie_id char(3) primary key,
name varchar(50),
date_released date
);

create table Watches
(
user_id varchar(20),
movie_id char(3),
date date,
rating int,
primary key(user_id, movie_id),
foreign key(user_id) references Account,
foreign key(movie_id) references Movie,
constraint watches_rating check (rating between 1 and 10)
);

create table MovieTopics
(
topic_id char(3),
movie_id char(3),
language varchar(20),
subtitles char(1),
country varchar(20),
primary key(topic_id, movie_id),
foreign key(topic_id) references topics,
foreign key(movie_id) references movie,
constraint movietopics_subtitles check(subtitles in('Y','N'))
);

create table Comments
(
user_id varchar(20),
movie_id char(3),
comment varchar(4000),
time timestamp,
primary key(user_id, movie_id, time),
foreign key(user_id) references Account,
foreign key(movie_id) references Movie
);

create table Actor
(
actor_id char(3) primary key,
last_name varchar(20),
first_name varchar(20),
date_of_birth date
);

create table Role
(
role_id char(3) primary key,
name varchar(40),
actor_id char(3),
foreign key (actor_id) references Actor
);

create table MovieRoles
(
role_id char(3),
movie_id char(3),
primary key (role_id, movie_id),
foreign key (role_id) references Role,
foreign key (movie_id) references Movie
);

create table Director
(
director_id char(3) primary key,
last_name varchar(20),
first_name varchar(20),
country varchar(20)
);

create table Directs
(
director_id char(3),
movie_id char(3),
primary key (director_id, movie_id),
foreign key (director_id) references Director,
foreign key (movie_id) references Movie
);

create table Studio
(
studio_id char(3) primary key,
name varchar(50),
country varchar(20)
);

create table Sponsors
(
studio_id char(3),
movie_id char(3),
primary key (studio_id, movie_id),
foreign key (studio_id) references Studio,
foreign key (movie_id) references Movie
);