-- LEFT OUTER JOIN
USE employees;
SELECT * FROM employees LEFT OUTER JOIN salaries ON employees.emp_no=salaries.emp_no;