-- SQL BETWEEN
USE employees;
-- prikazuje sve zaposlene ciji je datum zaposlnjavanja izmedju 19.5.1990 i 19.5.1997 i 
-- ciji datum rodjenja nije izmedju 1.1.1960 i 1.1.1970
SELECT * FROM employees WHERE hire_date BETWEEN '1990-05-19' AND '1997-05-19' AND 
	birth_date NOT BETWEEN '1960-01-01' AND '1970-01-01'
ORDER BY hire_date DESC;
 