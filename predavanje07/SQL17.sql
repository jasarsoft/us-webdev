-- PRIMER JOIN 3
USE employees;
-- prikazuje imena zaposlenih sa titulama, i od do, ali i sve zaposlene koji nikada nisu imali titulu
SELECT 	e.first_name AS "Ime zaposlenog", 
		e.last_name AS "Prezime zaposlenog", 
        t.title AS "Titula", 
        t.from_date AS "Od", 
        t.to_date AS "Do"  
FROM employees e 
	LEFT OUTER JOIN titles t 
    ON e.emp_no=t.emp_no 