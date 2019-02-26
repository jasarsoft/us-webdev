-- CREATE CONSTRAINT
USE sii;
-- dodavanje nove kolone
ALTER TABLE students ADD COLUMN Year year;
-- dodavanje CHECK ogranicenja
ALTER TABLE students ADD CONSTRAINT CHK_year CHECK (year>=18);