-- WHERE klauzula
USE employees;
-- prikazuje imena i prezimena svih zena iz tabele employees
SELECT last_name,first_name FROM employees WHERE gender='F';