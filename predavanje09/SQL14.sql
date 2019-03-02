-- AUTO INCREMENT
USE sii;
-- prvo brisemo primary key
ALTER TABLE students DROP PRIMARY KEY;
-- sada dodajemo primary key
ALTER TABLE students ADD CONSTRAINT PK_Students PRIMARY KEY(StudentID);
ALTER TABLE students MODIFY COLUMN StudentID int AUTO_INCREMENT;