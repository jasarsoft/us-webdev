-- CREATE TABLE komanda
USE sii;
DROP TABLE IF EXISTS students;
-- kreiranje tabele students
CREATE TABLE students (
-- primarni kljuc
StudentID int,
FirstName varchar(255),
LastName varchar(255),
Address varchar(255),
City varchar(255),
Department int);
