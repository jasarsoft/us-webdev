-- numericke funkcije
USE employees;
-- ABC vraca apsolutnu vrednost
SELECT ABS(-23.2323);
-- CEIL vraca najvecu celobrojnu numericku vrednost koja je >= kao broj u argumentu
SELECT CEIL(25.485);
-- FLOOR vraca najmanju celobrojnu numericku vrednost koja je >= kao broj u argumentu
SELECT FLOOR(25.485);
-- SQRT kvadratni koren
SELECT SQRT(64);
-- Funkcije ROUND() i TRUNCATE() zaokruzuju, odnosno sasecaju određenu vrednost.
SELECT ROUND(25.567,2);
SELECT TRUNCATE(25.567,2);