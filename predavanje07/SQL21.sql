-- GROUP BY
USE employees;
-- prebrojava broj zaposlenih po departmanima
SELECT COUNT(de.emp_no), d.dept_name 
FROM employees e 
	INNER JOIN dept_emp de ON e.emp_no=de.emp_no 
    INNER JOIN departments d ON de.dept_no=d.dept_no  
GROUP BY d.dept_name;