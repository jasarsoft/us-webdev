-- LEFT OUTER JOIN
USE employees;
SELECT * FROM employees e LEFT OUTER JOIN salaries s ON e.emp_no=s.emp_no;