-- ALTER TABLE komanda
USE sii;
-- dodavanje kolone DateOfBirth tipa date
ALTER TABLE students ADD COLUMN DateOfBirth date;
-- promena tipa podataka kolone DateOfBirth
ALTER TABLE students MODIFY COLUMN DateOfBirth year;
-- brisanje kolone DateOfBirth
ALTER TABLE students DROP COLUMN DateOfBirth; 