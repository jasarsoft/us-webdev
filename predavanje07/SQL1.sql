-- SELECT TOP naredba
USE employees;
-- prikazuje prva tri reda tabele zaposleni, sa imenom Elvis
SELECT * FROM employees WHERE first_name='Elvis' LIMIT 5;