-- EXISTS operator
USE employees;
-- sledeci upit vraca true i prikazuje imena i prezimena zaposlenih cija je plata > 150000
SELECT last_name,first_name 
FROM employees 
WHERE EXISTS ( SELECT salary 
			   FROM salaries  
               WHERE employees.emp_no=emp_no AND salary>150000
			 );
