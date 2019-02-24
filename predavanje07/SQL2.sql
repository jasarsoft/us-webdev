-- Funkcije max() i min()
USE employees;
-- Vraca najraniji i najkasniji datum zaposlenja
SELECT MIN(hire_date) AS "najraniji", MAX(hire_date) AS "najkasniji" FROM employees;