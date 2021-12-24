DROP TABLE IF EXISTS `AssociationSkillProject`;
DROP TABLE IF EXISTS `Project`;
DROP TABLE IF EXISTS `Education`;
DROP TABLE IF EXISTS `CV`;
DROP TABLE IF EXISTS `Skill`;
DROP TABLE IF EXISTS `Account`;

CREATE TABLE `Account`  (
  `id` int NOT NULL,
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
  `id` int NOT NULL,
  `title` varchar(255) NULL,
  `description` varchar(255) NULL,
  `theAccount` int NULL,
  PRIMARY KEY (`id`)
);


CREATE TABLE `Education`  (
  `id` int NOT NULL,
  `title` varchar(255) NULL,
  `start` varchar(10) NULL,
  `end` varchar(10) NULL,
  `theCV` int NULL,
  PRIMARY KEY (`id`)
);

CREATE TABLE `Project`  (
  `id` int NOT NULL,
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
  `id` int NOT NULL,
  `name` varchar(255) NULL,
  PRIMARY KEY (`id`)
);

ALTER TABLE `AssociationSkillProject` ADD CONSTRAINT `fk_AssociationSkillProject_Skill_1` FOREIGN KEY (`idSkill`) REFERENCES `Skill` (`id`);
ALTER TABLE `AssociationSkillProject` ADD CONSTRAINT `fk_AssociationSkillProject_Project_1` FOREIGN KEY (`idProject`) REFERENCES `Project` (`id`);
ALTER TABLE `CV` ADD CONSTRAINT `fk_CV_Account_1` FOREIGN KEY (`theAccount`) REFERENCES `Account` (`id`);
ALTER TABLE `Education` ADD CONSTRAINT `fk_Education_CV_1` FOREIGN KEY (`theCV`) REFERENCES `CV` (`id`);
ALTER TABLE `Project` ADD CONSTRAINT `fk_Project_CV_1` FOREIGN KEY (`theCV`) REFERENCES `CV` (`id`);

