-- NAREDBA UPDATE OPREZNO
USE employees;
-- ako se izostavi WHERE, azurirace se svi redovi
-- ne pokretati ovaj primer!!!
-- ime ce biti azurirano na vrednost Marko za sve redove
UPDATE employees SET first_name='Marko';
