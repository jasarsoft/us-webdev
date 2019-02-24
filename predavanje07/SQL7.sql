-- SQL IN operator
USE employees;
-- prikazuje sve podatke o platama za sve zaposlene cije je prezime Sluis
SELECT * from salaries WHERE emp_no IN 
	( SELECT emp_no FROM employees WHERE last_name='Sluis');