-- CREATE VIEW
USE employees;
-- brisemo pogled ako postoji
DROP VIEW IF EXISTS GreaterSalary;
-- kreiramo view koji prikazuje sve zaposlene koji imaju vecu od prosecne plate
CREATE VIEW GreaterSalary AS
SELECT e.first_name,e.last_name, s.salary FROM employees e INNER JOIN salaries s ON
e.emp_no=s.emp_no WHERE s.salary>(SELECT AVG(salary) FROM salaries);
-- prikazujemo podatke iz view
SELECT * FROM GreaterSalary;
