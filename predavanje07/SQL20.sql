-- GROUP BY
USE employees;
-- naredba koja prebrojava koliko ima zena, a koliko muskaraca medju zaposlenima
SELECT gender,COUNT(emp_no) AS "Broj zaposlenih po polu" 
FROM employees 
GROUP BY gender 
ORDER BY gender;