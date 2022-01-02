DROP TABLE IF EXISTS `AssociationSkillProject`;
DROP TABLE IF EXISTS `Project`;
DROP TABLE IF EXISTS `Education`;
DROP TABLE IF EXISTS `CV`;
DROP TABLE IF EXISTS `Skill`;
DROP TABLE IF EXISTS `Account`;

CREATE TABLE `Account`  (
  `id` int NOT NULL AUTO_INCREMENT ,
  `name` varchar(255) NULL,
  `surname` varchar(255) NULL,
  `birthdate` varchar(10) NULL,
  `address` varchar(255) NULL,
  `phoneNumber` varchar(255) NULL,
  `emailAddress` varchar(255) NULL,
  `password` varchar(255) NULL,
  `profilPicture` varchar(255) NULL,
  PRIMARY KEY (`id`)
);

CREATE TABLE `AssociationSkillProject`  (
  `idSkill` int NOT NULL,
  `idProject` int NOT NULL,
  PRIMARY KEY (`idSkill`, `idProject`)
);

CREATE TABLE `CV`  (
  `id` int NOT NULL AUTO_INCREMENT ,
  `title` varchar(255) NULL,
  `description` varchar(255) NULL,
  `theAccount` int NULL,
  PRIMARY KEY (`id`)
);


CREATE TABLE `Education`  (
  `id` int NOT NULL AUTO_INCREMENT ,
  `title` varchar(255) NULL,
  `start` varchar(10) NULL,
  `end` varchar(10) NULL,
  `theCV` int NULL,
  PRIMARY KEY (`id`)
);

CREATE TABLE `Project`  (
  `id` int NOT NULL AUTO_INCREMENT ,
  `title` varchar(255) NULL,
  `startDate` varchar(10) NULL,
  `endDate` varchar(10) NULL,
  `place` varchar(255) NULL,
  `summary` varchar(255) NULL,
  `description` varchar(255) NULL,
  `git` varchar(255) NULL,
  `kanban` varchar(255) NULL,
  `theCV` int NULL,
  PRIMARY KEY (`id`)
);

CREATE TABLE `Skill`  (
  `id` int NOT NULL AUTO_INCREMENT ,
  `name` varchar(255) NULL,
  PRIMARY KEY (`id`)
);

ALTER TABLE `AssociationSkillProject` ADD CONSTRAINT `fk_AssociationSkillProject_Skill_1` FOREIGN KEY (`idSkill`) REFERENCES `Skill` (`id`);
ALTER TABLE `AssociationSkillProject` ADD CONSTRAINT `fk_AssociationSkillProject_Project_1` FOREIGN KEY (`idProject`) REFERENCES `Project` (`id`);
ALTER TABLE `CV` ADD CONSTRAINT `fk_CV_Account_1` FOREIGN KEY (`theAccount`) REFERENCES `Account` (`id`);
ALTER TABLE `Education` ADD CONSTRAINT `fk_Education_CV_1` FOREIGN KEY (`theCV`) REFERENCES `CV` (`id`);
ALTER TABLE `Project` ADD CONSTRAINT `fk_Project_CV_1` FOREIGN KEY (`theCV`) REFERENCES `CV` (`id`);

#Insertion skills
insert into Skill (id, name)
values (1,'C++');
insert into Skill (id, name)
values (2,'PHP');
insert into Skill (id, name)
values (3,'Java');
insert into Skill (id, name)
values (4,'SQL');

#Insertion accounts
insert into Account (id, name, surname, birthdate, address, phoneNumber, emailAddress, password, profilPicture)
values (1,'Le Goff','Michel','1999-05-12','12 rue des Plumes','0298346725','michel.legoff@gmail.com','f','https://i.imgur.com/UQEynNG.png');

insert into Account (id, name, surname, birthdate, address, phoneNumber, emailAddress, password, profilPicture)
values (2,'Escobar','Pablo','1949-12-01','La catedral','???','pablo.escobar@gmail.com','128482','https://i.imgur.com/UWqlQQz.jpeg');

#Insertion cv
insert into CV (id, title, description, theAccount)
values (1,'Developpeur C++','Bonjour je suis Michel fraichement diplomer d un master 2 cybersecu.',1);

insert into CV (id, title, description, theAccount)
values (2,'Dev PHP','Je me suis reconverti en developpeur PHP',2);


#Insertion projects
insert into Project (id, title, startDate, endDate, place, summary, description, git, kanban, theCV)
values (1,'AntiCheat','2021-07-01','2021-08-31','Quimper','Creation d un anticheats open source','Creation d un anticheat en C++ pour detecter les aimbot. Utilisation des statisques inferentiels pour detecter les comportements anormaux','https://github.com/ChristopheQuiniou/EasyFolio','https://github.com/ChristopheQuiniou/EasyFolio/projects/1',1);

insert into Project (id, title, startDate, endDate, place, summary, description, git, kanban, theCV)
values (2,'E-shop','2021-07-01','2021-08-31','Paris','Creation de ma boutique en ligne','J ai creer un site e-commerce pour vendre les specialites de la colombie','https://github.com/ChristopheQuiniou/EasyFolio','https://github.com/ChristopheQuiniou/EasyFolio/projects/1',2);


#Insertion educations
insert into Education (id, title, start, end, theCV)
values (1,'DUT informatique','2018-09-01','2020-06-25',1);

insert into Education (id, title, start, end, theCV)
values (2,'Licence 3 Miage','2020-09-01','2021-06-20',1);

insert into Education (id, title, start, end, theCV)
values (3,'Master cybersecurite','2021-09-01','2023-09-05',1);

insert into Education (id, title, start, end, theCV)
values (4,'Formation accelerer developpeur','2020-09-01','2021-07-05',2);

#Insert associations between skills and projects
insert into AssociationSkillProject (idSkill, idProject)
values (1,1);

insert into AssociationSkillProject (idSkill, idProject)
values (4,1);

insert into AssociationSkillProject (idSkill, idProject)
values (2,2);