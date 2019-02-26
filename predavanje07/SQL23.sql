-- GROUP BY

USE employees;

-- prebrojava broj zaposlenih po departmanima, i prikazuje samo one departmane koji imaju 
-- vise od 20000 zaposlenih, i pritom ne uzima u obzir zaposlene cija prezimena pocinju sa slovom A

SELECT 	COUNT(de.emp_no) AS "Broj zaposleni", 
		d.dept_name 
FROM employees e 
	INNER JOIN dept_emp AS de ON e.emp_no=de.emp_no 
    INNER JOIN departments AS d ON de.dept_no=d.dept_no 
WHERE e.last_name NOT LIKE 'A%'
GROUP BY d.dept_name 
HAVING COUNT(de.emp_no)>20000 
ORDER BY COUNT(de.emp_no);