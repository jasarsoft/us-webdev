-- Funkcije za rad sa stringovima
USE employees;
-- prikazuje ascii reprezentaciju
SELECT ASCII(first_name) AS "ASCII" FROM employees;
-- char_length prikazuje duzinu u karakterima
SELECT CHAR_LENGTH(first_name) AS "Duzina", first_name FROM employees;
-- concat spaja stringove
SELECT CONCAT(first_name, " ", last_name) AS "ime i prezime" FROM employees;
