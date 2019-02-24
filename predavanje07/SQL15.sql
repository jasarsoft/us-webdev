-- PRIMER JOIN 1
USE employees;
-- prikazuje ime odeljenja u kom je zaposleni bio menadzer, sa datumima od kada je bio menadzer do kada je bio menadzer
SELECT e.first_name,e.last_name, d.dept_name, dm.from_date, dm.to_date 
FROM employees e INNER JOIN dept_manager dm 
	ON e.emp_no=dm.emp_no INNER JOIN departments d
	ON dm.dept_no=d.dept_no 
ORDER BY last_name;