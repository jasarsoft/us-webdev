-- Funkcije COUNT(), SUM() i AVG()
USE employees;
-- prikazuje ukupnu platu koju je odre]eni zaposleni ikada zaradio
SELECT SUM(salary) FROM salaries WHERE emp_no=10002;
