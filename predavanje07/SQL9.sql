-- INNER JOIN primer
USE employees;
SELECT * FROM employees INNER JOIN salaries on employees.emp_no=salaries.emp_no;