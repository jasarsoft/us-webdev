-- funkcije za rad sa Stringovima
USE employees;
-- LCASE konvertuje u lowercase
SELECT LCASE(first_name) AS "Mala slova" FROM employees;
-- funkcija LENGTH vraca duzinu stringa u bajtovima
SELECT LENGTH(first_name) AS "Duzina" FROM employees;
-- LPAD uvlaci s leva za odredjeni broj karaktera
SELECT LPAD(first_name,10,"--") AS "lpad firstanme" FROM employees;
-- RPAD uvlaci s desna za odredjeni broj karaktera
SELECT RPAD(first_name,10,"--") AS "rpad firstanme" FROM employees;