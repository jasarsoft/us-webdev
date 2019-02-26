-- CREATE TABLE SELECT
USE sii;
DROP TABLE IF EXISTS studentsBACKUP;
-- kreiramo backup tabelu students sa svim podacima iz izvorne tabele students
CREATE TABLE studentsBACKUP AS SELECT * FROM students;
DROP TABLE IF EXISTS studentsBACKUP1;
-- kreiramo backup tabelu students bez podataka iz izvorne tabele students
-- u WHERE zadajemo uslov koji nikada nece biti zadovoljen i zato ce
-- nova tabela biti prazna
CREATE TABLE studentsBACKUP2 AS SELECT * FROM students WHERE 1=2;
