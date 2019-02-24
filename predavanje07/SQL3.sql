-- Funkcije COUNT(), SUM() i AVG()
USE employees;
-- prikazuje broj zaposlenih i prosecni datum zaposlanvanja
SELECT COUNT(emp_no) AS "Broj zaposlenih", AVG(hire_date) AS "Prosecni datum zaposljavanja" FROM employees;
