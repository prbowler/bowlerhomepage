create table noteuser (
id int,
username varchar(80) primary key
);

create table Speakers (
id int,
speakerName varchar(80) primary key
);

create table Conference (
id int,
conferenceName varchar(80) primary key,
conferenceDate date
);

create table Session (
id int,
sessionName varchar(80) primary key
);

create table talks (
id int,
talkName varchar(80) primary key,
speakerName varchar(80) references speakers(speakerName),
conferenceName varchar(80) references conference(conferenceName),
sessionName varchar(80) references session(sessionName)
);

create table Notes (
id int,
noteName varchar (80) primary key,
note varchar(80),
username varchar(80) references noteuser(username),
talkName varchar(80) references talks(talkName)
);
