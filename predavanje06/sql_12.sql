-- NULL, IS NOT NULL
USE employees;
-- prikazuje one redove iz tabele deparments, gde kolone 
-- dept_no i dept_name nisu NULL
SELECT * FROM departments WHERE dept_no IS NOT NULL AND dept_name IS NOT NULL;