-- INNER JOIN PRIMER
USE employees;
SELECT * FROM employees, salaries WHERE employees.emp_no=salaries.emp_no;