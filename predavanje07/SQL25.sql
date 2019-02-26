-- EXISTS operator
USE employees;
-- sledeci upit prikazuje imena i prezimena zaposlenih na radnoj poziciji Engineer
SELECT last_name,first_name 
FROM employees 
WHERE EXISTS ( SELECT title 
			   FROM titles 
               WHERE employees.emp_no=titles.emp_no AND title='Engineer'
			 );
