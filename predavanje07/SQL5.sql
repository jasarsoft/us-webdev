-- SQL LIKE
USE employees;
-- prikazuje zaposlene cije prezime pocinje slovom a
SELECT * FROM employees WHERE last_name LIKE 'a%';