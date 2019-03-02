-- CREATE CONSTRAINT
USE sii;
ALTER TABLE students DROP FOREIGN KEY FK_Students_Departments;
-- kreiranje FK tabele students
ALTER TABLE students 
ADD CONSTRAINT FK_Students_Departments FOREIGN KEY (Department) REFERENCES Departments(DepartmentID);
