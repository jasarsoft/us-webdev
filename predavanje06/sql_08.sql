-- SQL ORDER BY
USE employees;
-- prikazuje imena i prezimena svih zaposlenih sortiranih 
-- u rastucem redosledu po prezimenu i u opadajucem redosledu po imenu
SELECT last_name,first_name FROM employees ORDER BY last_name ASC, first_name DESC;