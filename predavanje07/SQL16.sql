-- PRIMER JOIN 2
USE employees;
-- prikazuje ime odeljenja u kom zaposleni radi (je radio) sa datumima od do 
SELECT e.first_name,e.last_name, d.dept_name, de.from_date, de.to_date 
FROM employees e INNER JOIN dept_emp de 
	ON e.emp_no=de.emp_no INNER JOIN departments d
	ON de.dept_no=d.dept_no 
ORDER BY last_name;