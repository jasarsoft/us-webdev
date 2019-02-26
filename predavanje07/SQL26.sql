-- ANY operator
USE employees;
-- sledeci upit prikazuje imena i prezimena zaposlenih cija je plata=80013
-- podupit vraca true ako postoji makar jedan zaposleni sa tom platom!
SELECT last_name,first_name 
FROM employees 
WHERE emp_no=ANY ( SELECT emp_no 
				   FROM salaries 
                   WHERE salary=80013 );