-- NULL, IS NOT NULL
USE employees;
SELECT * FROM employees WHERE hire_date IS NULL;
SELECT * FROM employees WHERE birth_date IS NOT NULL;