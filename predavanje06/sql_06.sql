-- AND, OR i NOT operator
USE employees;
-- prikazuje sve zene koje su zaposlene posle 1.1.2000. godine
SELECT * FROM employees WHERE gender='F' AND hire_date>'2000/01/01';