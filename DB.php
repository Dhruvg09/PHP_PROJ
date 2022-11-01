<?php
CREATE TABLE `emp` (
  `EmpID` int NOT NULL,
  `EmpName` varchar(45) NOT NULL,
  `Gender` varchar(45) NOT NULL,
  `Mob` varchar(10) NOT NULL,
  `Email` varchar(45) NOT NULL,
  `Dept` int NOT NULL,
  `Salary` int NOT NULL,
  `DOJ` date NOT NULL,
  `DOR` date NOT NULL,
  PRIMARY KEY (`EmpID`),
  UNIQUE KEY `Mob_UNIQUE` (`Mob`)
)
?>