-- UNION i UNION ALL operatori
USE employees;
SELECT emp_no FROM employees UNION SELECT emp_no FROM salaries;
SELECT emp_no FROM employees UNION SELECT emp_no FROM salaries;