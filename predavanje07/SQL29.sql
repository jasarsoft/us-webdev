-- INSERT INTO SELECT
USE employees;
-- ako postoji tabela employees_backup, ona se brise
DROP TABLE IF EXISTS employees_backup;
-- prvo se pravi tabela koja ima samo kolone first_name i last_name
CREATE TABLE employees_backup AS SELECT first_name,last_name FROM employees WHERE 1=0;
-- sada se kopiraju podaci za razlicita first_name i last_name iz tabele employees u tabelu employees_backup
INSERT INTO employees_backup (first_name,last_name) SELECT DISTINCT first_name,last_name FROM employees;

