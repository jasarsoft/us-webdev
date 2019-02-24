-- RIGHT OUTER JOIN
USE employees;
SELECT * FROM employees RIGHT OUTER JOIN salaries ON employees.emp_no=salaries.emp_no;