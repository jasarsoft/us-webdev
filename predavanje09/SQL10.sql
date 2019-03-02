-- CREATE CONSTRAINT
USE sii;
CREATE TABLE departments (
DepartmentID int NOT NULL PRIMARY KEY,
DepartmentName varchar(255),
DepartmentLocation varchar(255));
-- dodvanje UNIQUE constraints-a
ALTER TABLE departments ADD CONSTRAINT UNIQ_DptName UNIQUE (DepartmentName);