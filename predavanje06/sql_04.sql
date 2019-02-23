-- SELECT DISTINCT naredba
USE employees;
-- prikazuje samo prezime zaposlenih koja su jedinstvena
SELECT DISTINCT(last_name) FROM employees;
-- prebrojava broj razlicitih prezimena u tabeli employees;
SELECT COUNT(DISTINCT(last_name)) FROM employees;
