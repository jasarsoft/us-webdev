-- ALL operator
USE employees;
-- podupit vraca true ako je svim zaposlenima plata > 10000
SELECT last_name,first_name 
FROM employees 
WHERE emp_no=ALL ( SELECT emp_no 
				   FROM salaries 
                   WHERE salary>10000);