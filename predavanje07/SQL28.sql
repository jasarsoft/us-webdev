-- INSERT INTO SELECT
USE employees;
-- ako postoji tabela employees_backup, ona se brise
DROP TABLE IF EXISTS employees_backup;
-- prvo se pravi tabela iste strukture kao tabela employees, koja je prazna, jer
-- WHERE 1=0 nije zadovoljeno
CREATE TABLE employees_backup AS SELECT * FROM employees WHERE 1=0;
-- sada se kopiraju svi podaci iz tabele employees u tabelu employees_backup
INSERT INTO employees_backup SELECT * FROM employees;

