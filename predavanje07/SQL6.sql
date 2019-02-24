-- SQL LIKE
USE employees;
-- prikazuje zaposlene cije prezime na drugoj poziciji ima slovo p i koja su makar 4 karaktera dugacka
SELECT * FROM employees WHERE last_name LIKE '_p_%_%';