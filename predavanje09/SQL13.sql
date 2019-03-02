-- CREATE INDEX
USE sii;
-- KREIRA INDEKS NAD KOLONOM LastName
CREATE INDEX students_LastName ON Students (LastName);
-- KREIRA UNIQUE INDEX NAD KOLONOM FirstName
CREATE UNIQUE INDEX students_FirstName ON Students(FirstName);
-- brise unique index, jer nema smisla
ALTER TABLE students DROP INDEX students_FirstName;
