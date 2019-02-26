-- IFNULL() COALSECE()
USE employees;
-- prikazuje imena i prezimena zaposlenih i umanjene plate za 20 %
SELECT first_name,last_name, IFNULL(salary*0.8,0) AS "Plata" FROM employees INNER JOIN salaries ON
employees.emp_no=salaries.emp_no;
-- prikazuje imena i prezimena zaposlenih i umanjene plate za 20 %
SELECT first_name,last_name, IFNULL(salary*0.8,0) AS "Plata" FROM employees INNER JOIN salaries ON
employees.emp_no=salaries.emp_no;